<section id="toggle-form-bug" class="toggle-form" style="display: none;">
    <div class=" formwrap" style="overflow: auto;">
        <div class="nav-slider">
            <div class="pt-2">
                <p class="text-dark h5"><a class="form-menu"><i class="fas fa-th m-2 fa-xs"></a></i></i>New Bug</p>
                <div style="position:relative;bottom:40px;right:16px;">
                    <button id="project-menu-button" type="button" class="btn btn-success float-right">New Project</button>
                </div>
            </div>
        </div>
        <div class="px-4">
            <form action="{{asset('addproject')}}" method="post" role="form" data-toggle="validator">
                @csrf

                <!-- Project -->
                <div class="form-group">
                    <label>Project*</label>
                    <select class="form-control" style="width: 100%;">
                        <option selected="selected">Heenoow</option>
                    </select>
                </div>
                <!-- Describtion -->
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="desc" class="form-control" rows="3" placeholder=""></textarea>
                </div>

                <div class="row ml-2 ">
                    <p class="mr-1"><button type="submit" class="btn orange w-100">Add</button></p>
                    <p class="ml-1"><button id="close-bug-modal" type="button" class="btn cancel w-100">cancel</button></p>
                </div>
            </form>
        </div>
    </div>

</section>