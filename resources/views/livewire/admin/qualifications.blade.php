<div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Qualifications <a @click="addQual = true" class="edit-icon" data-bs-toggle="modal" data-bs-target="#experience_info"><i class="fa fa-pencil"></i></a></h3>
                        <div class="experience-box">
                            <ul class="experience-list">
                                @foreach ($qualification as $item)
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">{{$item->certification}}</a>
                                            <span class="time">{{$item->institution}} - {{$item->certification_date}} </span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
        </div>
</div>