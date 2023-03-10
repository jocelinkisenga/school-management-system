     <div class="sidebar" id="sidebar">
         <div class="sidebar-inner slimscroll">
             <div id="sidebar-menu" class="sidebar-menu">
              
                     <ul>
                        @if (Auth::user()->role == 1)
                         <li class="menu-title">
                             <span>Main Menu</span>
                         </li>
                         <li class="submenu">
                             <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span
                                     class="menu-arrow"></span>
                         </li>
                         <li class="submenu active">
                             <a href=""><i class="fas fa-user-graduate"></i> <span> Eleves</span> <span
                                     class="menu-arrow"></span></a>
                             <ul>
                                 <li><a href="{{ route('all.eleves') }}">Tous les eleves</a></li>
                                 <li><a href="{{ route('register.eleve') }}" class="active">inscrire un élève</a></li>
                             </ul>
                         </li>
                         <li class="submenu">
                             <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                                     class="menu-arrow"></span></a>
                             <ul>
                                 <li><a href="{{ route('all.teachers') }}">Tous les enseignants</a></li>
                                 <li><a href="{{ route('register.teacher') }}">enregistrer un enseignant</a></li>
                             </ul>
                         </li>
                         <li class="submenu">
                             <a href="#"><i class="fas fa-building"></i> <span>option</span> <span
                                     class="menu-arrow"></span></a>
                             <ul>
                                 <li><a href="{{ route('options') }}">toutes les options</a></li>
                                 <li><a href="{{ route('create-option') }}">ajouter une option</a></li>
                             </ul>
                         </li>
                         <li class="submenu">
                             <a href="#"><i class="fas fa-book-reader"></i> <span>classes</span> <span
                                     class="menu-arrow"></span></a>
                             <ul>
                                 <li><a href="">toutes les classes</a></li>
                                 <li><a href="{{ route('create-classe') }}">ajouter une classe</a></li>
                             </ul>
                         </li>
                         <li class="submenu">
                             <a href="#"><i class="fas fa-book-reader"></i> <span>cours</span> <span
                                     class="menu-arrow"></span></a>
                             <ul>
                                 <li><a href="{{ route('courses') }}">tous les cours</a></li>
                                 <li><a href="{{ route('create.course') }} ">ajouter un cours</a></li>
                             </ul>
                         </li>
                         <li class="menu-title">
                             <span>compte</span>
                         </li>
                         <li class="submenu">
                             <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Paiements</span> <span
                                     class="menu-arrow"></span></a>
                             <ul>
                                 <li><a href="fees-collections.html">touts les paiements</a></li>
                                 <li><a href=" {{ route('create.fees') }}">ajouter un frais</a></li>
                             </ul>
                         </li>
                         @endif

                         {{-- eleves cside components --}}

                         @if (Auth::user()->role == 3)
                         <li class="menu-title">
                           <span>Main Menu</span>
                       </li>
                       <li class="submenu">
                           <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span
                                   class="menu-arrow"></span>
                       </li>
                       <li class="submenu active">
                           <a href=""><i class="fas fa-user-graduate"></i> <span> Mes cours</span> <span
                                   class="menu-arrow"></span></a>
                           <ul>
                               <li><a href="">Mes cours</a></li>
                               <li><a href="" class="active">Mes devoirs</a></li>
                           </ul>
                       </li>
                       <li class="submenu">
                           <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Mon horaire</span> <span
                                   class="menu-arrow"></span></a>
                           <ul>
                               <li><a href="">Tous les enseignants</a></li>
                               <li><a href="">enregistrer un enseignant</a></li>
                           </ul>
                       </li>
                         @endif
                     </ul>
                
             </div>
         </div>
     </div>
