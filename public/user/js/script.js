// bootstrap 5 step widzad
$(document).ready(function () {
	//Enable Tooltips
	var tooltipTriggerList = [].slice.call(
		document.querySelectorAll('[data-bs-toggle="tooltip"]')
	);
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl);
	});

	//Advance Tabs
	$(".next").click(function () {
		const nextTabLinkEl = $(".nav-tabs .active")
			.closest("li")
			.next("li")
			.find("a")[0];
		const nextTab = new bootstrap.Tab(nextTabLinkEl);
		nextTab.show();
	});

	$(".previous").click(function () {
		const prevTabLinkEl = $(".nav-tabs .active")
			.closest("li")
			.prev("li")
			.find("a")[0];
		const prevTab = new bootstrap.Tab(prevTabLinkEl);
		prevTab.show();
	});
});

// otp scripts
function auto_tab_input() {
	$(".code-inputs .form-control").keyup(function () {
		if (this.value.length == this.maxLength) {
			$(this).nextAll(".code-inputs .form-control:enabled:first").focus();
		}
	});
}
function auto_backspace() {
	$(".code-inputs .form-control").keyup(function (e) {
		if (e.keyCode == 8) {
			if ($(this).prev().length > 0) {
				$(this).prev("input").focus();
			}
		}
	});
}

$(document).ready(function () {
	auto_tab_input();
	auto_backspace();
});

// menu
$('.menu_expand_btn').click(function(){
 $('nav').toggleClass('collapseMenu');
 $('body').toggleClass('body_move')
});

$('nav .accordion-item').click(function(){
	$('nav .accordion-item').removeClass('active');
	$(this).addClass('active')
});

// custom js
$('.variantMain .form-check-input').change(function() {
  if($(this).is(':checked')) {
    $(this).parent('.form-check').next('.afterCheck').show();
    $(this).parent('.form-check').next('.afterCheck').find('.innerWrap').show();
    $(this).parent('.form-check').next().next('.notCheck').hide();
  } else {
    // If you want to remove the class when the checkbox is unchecked
    $(this).parent('.form-check').next('.afterCheck').hide();
    $(this).parent('.form-check').next().next('.notCheck').show();
  }
});

// add row on click add btn
$(".addrow").on('click', function(){
  var ele = $(this).parents('.innerWrap').clone(true);
  $(this).parents('.innerWrap').after(ele);
});


$(".removeRow").on('click', function(){
  var parent = $(this).closest('.innerWrap');
  if(parent.siblings('.innerWrap').length > 0){
      parent.remove();
      // console.log('Removed innerWrap');
  } else {

    parent.toggle();
    $('.notCheck').show();
    $('#check7').prop('checked', function(i, oldVal) {  
      return !oldVal; 
  });
      // console.log('Cannot remove, only one innerWrap');
  } 
});



$('.trackQuantity').change(function() {
  if ($(this).is(':checked')) {
    $(this).parent('.form-check').next('#quantity').show();
  } else {
    // If you want to remove the class when the checkbox is unchecked
    $(this).parent('.form-check').next('#quantity').hide();
  }
});



$('.customizerBtn').click(function(){
  $(this).parent().parent('.templateCustomizer').addClass('open');
  $(this).hide();
})
$('.closePanel').click(function(){
  $(this).parent().parent('.templateCustomizer').removeClass('open');
  $(this).prev('.customizerBtn').show();
})
$('.zonebtn').click(function(){
  $('#newZone').toggleClass('open');
})


// Tagify
var $input = $('input[name=tags]').tagify({
  whitelist : [
      {"id":1, "value":"some string"}
  ]
})
.on('add', function(e, tagName){
  console.log('JQEURY EVENT: ', 'added', tagName)
})
.on("invalid", function(e, tagName) {
  console.log('JQEURY EVENT: ',"invalid", e, ' ', tagName);
});


// change existing image and add new image
var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
};


// bootstap 5 drap & drop file upload
console.clear();
('use strict');


// Drag and drop - single or multiple image files
// https://www.smashingmagazine.com/2018/01/drag-drop-file-uploader-vanilla-js/
// https://codepen.io/joezimjs/pen/yPWQbd?editors=1000
(function () {

  'use strict';
  
  // Four objects of interest: drop zones, input elements, gallery elements, and the files.
  // dataRefs = {files: [image files], input: element ref, gallery: element ref}

  const preventDefaults = event => {
    event.preventDefault();
    event.stopPropagation();
  };

  const highlight = event =>
    event.target.classList.add('highlight');
  
  const unhighlight = event =>
    event.target.classList.remove('highlight');

  const getInputAndGalleryRefs = element => {
    const zone = element.closest('.upload_dropZone') || false;
    const gallery = zone.querySelector('.upload_gallery') || false;
    const input = zone.querySelector('input[type="file"]') || false;
    return {input: input, gallery: gallery};
  }

  const handleDrop = event => {
    const dataRefs = getInputAndGalleryRefs(event.target);
    dataRefs.files = event.dataTransfer.files;
    handleFiles(dataRefs);
  }


  const eventHandlers = zone => {

    const dataRefs = getInputAndGalleryRefs(zone);
    if (!dataRefs.input) return;

    // Prevent default drag behaviors
    ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
      zone.addEventListener(event, preventDefaults, false);
      document.body.addEventListener(event, preventDefaults, false);
    });

    // Highlighting drop area when item is dragged over it
    ;['dragenter', 'dragover'].forEach(event => {
      zone.addEventListener(event, highlight, false);
    });
    ;['dragleave', 'drop'].forEach(event => {
      zone.addEventListener(event, unhighlight, false);
    });

    // Handle dropped files
    zone.addEventListener('drop', handleDrop, false);

    // Handle browse selected files
    dataRefs.input.addEventListener('change', event => {
      dataRefs.files = event.target.files;
      handleFiles(dataRefs);
    }, false);

  }


  // Initialise ALL dropzones
  const dropZones = document.querySelectorAll('.upload_dropZone');
  for (const zone of dropZones) {
    eventHandlers(zone);
  }


  // No 'image/gif' or PDF or webp allowed here, but it's up to your use case.
  // Double checks the input "accept" attribute
  const isImageFile = file => 
    ['image/jpeg', 'image/png', 'image/svg+xml'].includes(file.type);


  function previewFiles(dataRefs) {
    if (!dataRefs.gallery) return;
    for (const file of dataRefs.files) {
      let reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onloadend = function() {
        let img = document.createElement('img');
        img.className = 'upload_img mt-2';
        img.setAttribute('alt', file.name);
        img.src = reader.result;
        dataRefs.gallery.appendChild(img);
      }
    }
  }

  // Based on: https://flaviocopes.com/how-to-upload-files-fetch/
  const imageUpload = dataRefs => {

    // Multiple source routes, so double check validity
    if (!dataRefs.files || !dataRefs.input) return;

    const url = dataRefs.input.getAttribute('data-post-url');
    if (!url) return;

    const name = dataRefs.input.getAttribute('data-post-name');
    if (!name) return;

    const formData = new FormData();
    formData.append(name, dataRefs.files);

    fetch(url, {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      console.log('posted: ', data);
      if (data.success === true) {
        previewFiles(dataRefs);
      } else {
        console.log('URL: ', url, '  name: ', name)
      }
    })
    .catch(error => {
      console.error('errored: ', error);
    });
  }


  // Handle both selected and dropped files
  const handleFiles = dataRefs => {

    let files = [...dataRefs.files];

    // Remove unaccepted file types
    files = files.filter(item => {
      if (!isImageFile(item)) {
        console.log('Not an image, ', item.type);
      }
      return isImageFile(item) ? item : null;
    });

    if (!files.length) return;
    dataRefs.files = files;

    previewFiles(dataRefs);
    imageUpload(dataRefs);
  }

})();

// select2
$('.js-example-basic-multiple').select2();

$(".js-example-tags").select2({
  tags: true
});

// show hide panel
$('#customInfo').click(function(){
  $('#customInfoBox').show();
  $(this).hide();
})

// chart js
var config = {
  type: 'line',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
      label: 'APAC RE Index',
      backgroundColor: window.chartColors.red,
      borderColor: window.chartColors.red,
      fill: false,
      data: [
        10,
        20,
        30,
        40,
        100,
        50,
        150
        /*randomScalingFactor(),
        randomScalingFactor(),
        randomScalingFactor(),
        randomScalingFactor(),
        randomScalingFactor(),
        randomScalingFactor(),
        randomScalingFactor()*/
      ],
    }, {
      label: 'APAC PME',
      backgroundColor: window.chartColors.blue,
      borderColor: window.chartColors.blue,
      fill: false,
      data: [
        50,
        300,
        100,
        450,
        150,
        200,
        300
      ],
  
    }]
  },
  options: {
    responsive: true,
    title: {
      display: true,
      text: ''
    },
    scales: {
      xAxes: [{
        display: true,
        scaleLabel: {
          display: true,
          labelString: 'Date'
        },
    
      }],
      yAxes: [{
        display: true,
        //type: 'logarithmic',
        scaleLabel: {
            display: true,
            labelString: ''
          },
          ticks: {
            min: 0,
            max: 500,

            // forces step size to be 5 units
            stepSize: 100
          }
      }]
    }
  }
};

window.onload = function() {
  var ctx = document.getElementById('canvas').getContext('2d');
  window.myLine = new Chart(ctx, config);
  window.myLine.update();
};


// document.getElementById('randomizeData').addEventListener('click', function() {
//   config.data.datasets.forEach(function(dataset) {
//     dataset.data = dataset.data.map(function() {
//       return randomScalingFactor();
//     });

//   });

  
// });

// pie chart
var productCanvas = document.getElementById("productChart");

var productData = {
    labels: [
        "81%",
        "19%"
    ],
    datasets: [
        {
            data: [81, 19],
            backgroundColor: [
                "#36A2EB",
                "#FF6384"
            ]
        }]
};

var pieChart = new Chart(productCanvas, {
  type: 'pie',
  data: productData
});

// bootstrap 5  tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

