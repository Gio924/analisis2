@extends('layouts.principal')

@section('content')

<!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     INICIO 
                   </h3>
                   <ul class="breadcrumb">
                   
                      
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            
<div class="row-fluid">
                <!--BEGIN METRO STATES-->
    <div class="metro-nav">
      
      <div class="metro-nav-block nav-block-orange">
          <a data-original-title="" href="{!!URL::to('/mercado')!!}">
            <i class="icon-shopping-cart"></i>
            <div class="status">Modulo Mercado</div>
          </a>
      </div>
      <div class="metro-nav-block nav-block-purple">
          <a data-original-title="" href="#">
            <i class="icon-move"></i>
            <div class="status">Modulo Cementerio</div>
          </a>
      </div>
      <div class="metro-nav-block nav-block-blue">
          <a data-original-title="" href="{!!URL::to('/desechos')!!}">
            <i class="icon-flag"></i>
            <div class="status">Modulo Desechos Solidos</div>
          </a>
      </div>
      <div class="metro-nav-block nav-block-green">
          <a data-original-title="" href="#">
            <i class="icon-sitemap"></i>
            <div class="status">Modulo de Estado Familiar</div>
          </a>
      </div>
          
    </div>
    <div class="space10"></div>
                <!--END METRO STATES-->
  </div>


   @stop