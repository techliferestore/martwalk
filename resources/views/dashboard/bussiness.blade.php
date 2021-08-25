

@extends('layouts.layout_home')
@section('content')





<!-- profile-edit-container-->

@livewire('add-bussiness',['profile_id' =>(Auth::user()->id) ])
</div>
                        

                            
                           
                        </div>
                        <!-- pagination-->





                    </div>
                    <!-- dashboard-list-box end-->
                </div>
                <!-- dasboard-wrap end-->
            </div>
        </section>
        <div class="limit-box fl-wrap"></div>
    </div>
    <!-- content end-->

    <!-- content end-->
            </div>



@endsection
