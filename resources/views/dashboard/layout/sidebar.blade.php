   <div class="col-lg-3 mt-0">
                    <div class="sidebar-left">
                        <div class="profile-card text-center" >
                            <!-- PROFILE IMAGE WRAPPER -->
                            <div class="profile-img-wrap"  style="background: url('{{ url('uploads/'.$profile->background_image) }}') center/cover no-repeat;">
                                <img src="{{url('uploads/'.$profile->image)}}" alt="Profile">
                            </div>
                            <h6 class="mt-2 mb-0">{{$profile->name}}</h6>
                            <small>Travel Journalist</small>
                            <h6 class="stats-title">Profile Stats</h6>
                            <div class="profile-stats">
                                <div>
                                    <b>32</b>
                                    <span>Articles</span>
                                </div>
                                <div>
                                    <b>46</b>
                                    <span>Posts</span>
                                </div>
                                <div>
                                    <b>72</b>
                                    <span>Saved</span>
                                </div>
                            </div>
                        </div>
                        <div class="menu-box">
                            <a href="{{url('/')}}" class="menu-item">
                                <span class="menu-black"> <img src="{{url('assets/images/copywriting_1.png')}}" alt="Share"></span>
                                <span>Artical</span>
                            </a>
                            <a href="{{url('post')}}" class="menu-item">
                                <span class="menu-black"> <img src="{{url('assets/images/copywriting_2.png')}}" alt="Share"></span>
                                <span>Post</span>
                            </a>
                            <a href="{{url('travel-clips')}}" class="menu-item">
                                <span class="menu-black"> <img src="{{url('assets/images/copywriting_3.png')}}" alt="Share"></span>
                                <span>Travel Clips</span>
                            </a>
                        </div>
                    </div>
                </div>
