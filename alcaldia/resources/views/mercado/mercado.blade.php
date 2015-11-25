 @extends('layouts.principal')

 @section('content')
 
 <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     MENU MERCADO
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="{!!URL::to('/panel')!!}">Inicio</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Menu Mercado
                       </li>
                      
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->

          <div class="row-fluid">
               <div class="metro-nav metro-fix-view">
    <div class="metro-nav-block nav-block-orange long"> <a data-original-title="" href="/mercado_solicitudes"> <i class="icon-file"></i>
      <div class="status">Solicitudes</div>
    </a> </div>
    <div class="metro-nav-block double nav-block-purple long"> <a data-original-title="" href="index.php?pagina=empleados"> <i class="icon-legal"></i>
      <div class="status">Resoluciones</div>
    </a> </div>
    <div class="metro-nav-block double nav-block-yellow long"> <a data-original-title="" href="index.php?pagina=proveedores"> <i class="icon-tasks"></i>
      <div class="status">Asignaciones</div>
    </a> </div>
  
  </div>
             </div>

   @stop