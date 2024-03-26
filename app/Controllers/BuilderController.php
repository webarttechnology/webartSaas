<?php

namespace App\Controllers;

use App\Models\Builder;
use Core\Request;
use Core\Controller;
use App\Models\Option;


class BuilderController extends Controller
{


   public function edit_builder()
   {
      try {
         $request = new Request;
         // fire($request->all());
         $optionM = new Option();
         $data['themeInfo'] = $optionM->getActive();
         $data['section']  = $request->get('section');

         // fire( $data['section'] );
        
         $builder = $this->view('themes/' . trim($data['themeInfo']->value). '/' . 'builder', $data)->render();

         return responseJson(['status' => 'success', 'data' => $builder ]);
      } catch (\Throwable $th) {
         return responseJson(['status' => 'error', 'message' => 'Server Error Please try Again']);
      }
   }

   public function edit_theme_save()
   {

      try {

         $request = new Request;

         $builder   = new Builder;

         if($request->get('section') == 'product1'){
            $section_name  = 'Best Seller';
         }else{
            $section_name  = $request->get('section');
         }

         $page = $builder->getPage(ucfirst($request->get('page')));
         $section = $builder->getSection(ucfirst($section_name));

         // fire($request->all());

         $action = trim($request->get('action'));

         if( $action == 'Remove'){
            $status = 'Inactive';
         }else{
            $status = 'Active';
         }

         //fire( $status );

         $optionM = new Option();

         $themeInfo = $optionM->getActive();

         $data = [
               'theme'           => trim($themeInfo->value),
               'page_id'         => $page->id,
               'section_id'      => $section->id,
               'value'           => $request->get('content'),
               'status'          => $status,
         ];

        $builderData = $builder->checkBuilder(trim($themeInfo->value), $page->id, $section->id);

        if($builderData){
           //////  Update ////
           if($action == 'Back' || $action == 'Remove'){
              $builder->updateBuilder($builderData->id, $builderData->value, $status);
           }else{
              $builder->updateBuilder($builderData->id, $request->get('content'), $status);
           }

        }else{
            /////// Create ////
           $builder->createBuilder($data);
        }
        return responseJson(['status' => 'success', 'message' => 'Done']);
      } catch (\Throwable $th) {
         return responseJson(['status' => 'error', 'message' => 'Server Error Please try Again']);
      }
   }


   public function back_edit_theme()
   {

      try {

         $request = new Request;
       
         $optionM = new Option();

         $themeInfo = $optionM->getActive();

         $builder   = new Builder;

         if($request->get('section') == 'product1'){
            $section_name  = 'Best Seller';
         }else{
            $section_name  = $request->get('section');
         }

         $page = $builder->getPage(ucfirst($request->get('page')));
         $section = $builder->getSection(ucfirst($section_name));

         $builderData = $builder->checkBuilder(trim($themeInfo->value), $page->id, $section->id);

         // fire($builderData);

         if($builderData){
            return responseJson(['status' => 'success', 'data' => $builderData->value ]);
         }

         return responseJson(['status' => 'error', 'message' => 'No data']);

      } catch (\Throwable $th) {
         return responseJson(['status' => 'error', 'message' => 'Server Error Please try Again']);
      }

   }

   
   
}
