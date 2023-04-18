
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Education <a @click="addEdu = true" href="#" href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#education_info"><i class="fa fa-plus"></i></a></h3>
                        <div class="experience-box">
                            <ul class="experience-list">
                                @foreach ($education as $item)
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">{{$item->institution}}</a>
                                            
                                            <div>{{ $item->course }}</div>
                                            <span class="time">{{$item->start_date}} - {{$item->end_date}}</span>

                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
</div>
</div>
                  