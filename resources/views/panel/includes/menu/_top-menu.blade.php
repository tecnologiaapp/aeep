<ul class="nk-menu nk-menu-main ui-s2">
   <!-- Menu items -->
   <!-- Spaces item -->
   <li class="nk-menu-item has-sub">
      <a href="#" class="nk-menu-link nk-menu-toggle">
         <span class="nk-menu-text">Puntos AEEP</span>
      </a>

      <ul class="nk-menu-sub">
         <li class="nk-menu-item">
            <a href="{{ route('panel.spaces.index') }}" class="nk-menu-link">
               <span class="nk-menu-text">Todos los puntos</span>
            </a>
         </li>
         <!-- .nk-menu-item -->

         @role(['Admin|Biller|Collaborator|Reviewer'])
         <li class="nk-menu-item">
            <a href="{{ route('panel.spaces.create') }}" class="nk-menu-link">
               <span class="nk-menu-text">Agregar punto</span>
            </a>
         </li>
         @endrole

         <!-- .nk-menu-item -->
      </ul>
      <!-- .nk-menu-sub -->
   </li>
   <!-- Spaces item -->

   <!-- Bookings item -->
   <li class="nk-menu-item has-sub">
      <a href="#" class="nk-menu-link nk-menu-toggle">
         <span class="nk-menu-text">Solicitudes</span>
      </a>

      <ul class="nk-menu-sub">
         <li class="nk-menu-item">
            <a href="{{ route('panel.bookings.index') }}" class="nk-menu-link">
               <span class="nk-menu-text">Mis solicitudes</span>
            </a>
         </li>
         <!-- .nk-menu-item -->
      </ul>
      <!-- .nk-menu-sub -->
   </li>
   <!-- /Bookings item -->

   @role(['Admin'])
   <!-- Users item -->
   <li class="nk-menu-item has-sub">
      <a href="#" class="nk-menu-link nk-menu-toggle">
         <span class="nk-menu-text">Usuarios</span>
      </a>

      <ul class="nk-menu-sub">
         <li class="nk-menu-item">
            <a href="#" class="nk-menu-link">
               <span class="nk-menu-text">Todos los usuarios</span>
            </a>
         </li>
         <!-- .nk-menu-item -->
      </ul>
      <!-- .nk-menu-sub -->
   </li>
   <!-- /Users item -->

   <!-- Roles item -->
   <li class="nk-menu-item has-sub">
      <a href="#" class="nk-menu-link nk-menu-toggle">
         <span class="nk-menu-text">Roles</span>
      </a>

      <ul class="nk-menu-sub">
         <li class="nk-menu-item">
            <a href="#" class="nk-menu-link">
               <span class="nk-menu-text">Todos los roles</span>
            </a>
         </li>
         <!-- .nk-menu-item -->
      </ul>
      <!-- .nk-menu-sub -->
   </li>
   <!-- /Roles item -->
   @endrole
   <!-- /Menu items -->
</ul>