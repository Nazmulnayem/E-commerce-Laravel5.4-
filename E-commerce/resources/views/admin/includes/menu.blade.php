<div class="down">	
                    <a href="index.html"><img src="{{Auth::user()->Image}}"></a>
                    <a href="index.html">{{ Auth::user()->name }}</a>
                    <p>System Administrator in Company</p>
                    <ul>
                        <li><a class="tooltips" href="index.html"><span>{{ Auth::user()->name }}</span><i class="lnr lnr-user"></i></a></li>
                        <li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
                        <li><a class="tooltips" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>Log out</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                <i class="lnr lnr-power-switch"></i></a></li>
                    </ul>
                </div>
                <!--//down-->
                <div class="menu">
                    <ul id="menu" >
                        <li><a href="{{ url('/home')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                        <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Userinfo</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-avaliacoes" ><a href="{{url('/user/add')}}">AddUser</a></li>
                                <li id="menu-academico-boletim" ><a href="{{url('/user/manage')}}">manageUser</a></li>
                                

                            </ul>
                        </li>
                        <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Categoryinfo</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-avaliacoes" ><a href="{{url('/category/add')}}">AddCategory</a></li>
                                <li id="menu-academico-boletim" ><a href="{{url('/category/manage')}}">manageCategory</a></li>
                                

                            </ul>
                        </li>
                        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Manufactureinfo</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-avaliacoes" ><a href="{{url('/manufacture/add')}}">Add Manufacture</a></li>
                                <li id="menu-academico-boletim" ><a href="{{url('/manufacture/manage')}}">Manage Manufacture</a></li>
                                
                            </ul>
                        </li>
                        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>productInfo</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-avaliacoes" ><a href="{{url('/product/add')}}">Add product</a></li>
                                <li id="menu-academico-boletim" ><a href="{{url('/product/manage')}}">Manage product</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="typography.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
                        <li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-avaliacoes" ><a href="login.html">Login</a></li>
                                <li id="menu-academico-boletim" ><a href="register.html">Register</a></li>
                                <li id="menu-academico-boletim" ><a href="404.html">404</a></li>
                                <li id="menu-academico-boletim" ><a href="sign.html">Sign up</a></li>
                                <li id="menu-academico-boletim" ><a href="profile.html">Profile</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mail Box</span><span class="fa fa-angle-right" style="float: right"></span></a>
                            <ul>
                                <li><a href="inbox.html"><i class="fa fa-inbox"></i> Inbox</a></li>
                                <li><a href="compose.html"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
                                <li><a href="editor.html"><span class="lnr lnr-highlight"></span> Editors Page</a></li>

                            </ul>
                        </li>
                        <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Components</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-avaliacoes" ><a href="grids.html">Grids</a></li>
                                <li id="menu-academico-boletim" ><a href="media.html">Media Objects</a></li>

                            </ul>
                        </li>
                        <li><a href="chart.html"><i class="lnr lnr-chart-bars"></i> <span>Charts</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                            <ul>
                                <li><a href="map.html"><i class="lnr lnr-map"></i> Maps</a></li>
                                <li><a href="graph.html"><i class="lnr lnr-apartment"></i> Graph Visualization</a></li>
                            </ul>
                        </li>
                        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-smile-o"></i> <span>More</span><span class="fa fa-angle-double-right" style="float: right"></span></a>
                            <ul id="menu-comunicacao-sub" >
                                <li id="menu-mensagens" style="width:120px" ><a href="project.html">Projects <i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
                                    <ul id="menu-mensagens-sub" >
                                        <li id="menu-mensagens-enviadas" style="width:130px" ><a href="ribbon.html">Ribbons</a></li>
                                        <li id="menu-mensagens-recebidas"  style="width:130px"><a href="blank.html">Blank</a></li>
                                    </ul>
                                </li>
                                <li id="menu-arquivos" ><a href="500.html">500</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>		
      