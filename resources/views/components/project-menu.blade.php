<section id="toggle-form-project" class="toggle-form">
    <div class="formwrap" style="overflow: auto;">
        <div class="nav-slider">
            <div class="pt-2">
                <p class="text-dark h5"><a class="form-menu"><i class="fas fa-th m-2 fa-xs"></a></i></i>New Project</p>
                <div style="position:relative;bottom:40px;right:16px;">
                    <button id="bug-menu-button" type="button" class="btn btn-success float-right">New bug</button>
                </div>
            </div>
        </div>
        <div class="px-4">
            <form action="{{asset('addproject')}}" method="post" role="form" data-toggle="validator">
                @csrf
                <!-- Project Title -->
                <div class="form-group mt-2">
                    <label for="fname" class="control-label">Project Title * <a href=""> <i class="fas fa-info-circle"></i></a></label>
                    <input type="text" id="fname" name="title" class="form-control" data-error="Please enter your first name" required>
                </div>
                <!-- Project Owner -->
                <div class="form-group">
                    <label>Owner</label>
                    <select name="username" class="form-control" style="width: 100%;">
                        <option selected="selected" value="{{auth()->user()->id}}">{{auth()->user()->name}}</option>
                    </select>
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label>Project Overview</label>
                    <textarea name="desc" class="form-control" rows="3" placeholder=""></textarea>
                </div>

                <!-- Access -->
                <div class="row">
                    <div class="form-group ml-2">
                        <label>Project access</label>
                        <div class="ml-4">
                            <div class="form-check">
                                <input class="form-check-input" id="private" type="radio" name="access" value="private">
                                <label class="form-check-label" for="private">Private</label>
                                <br>
                                <small>Only project users can view and access this project.
                                </small>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="public" type="radio" name="access" checked value="public">
                                <label class="form-check-label" for="public">Public</label>
                                <br>
                                <small>Portal users can only view, follow, and comment whereas, project users will have complete access.</small>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row ml-2 ">
                    <p class="mr-1"><button type="submit" class="btn orange w-100">Add</button></p>
                    <p class="ml-1"><button id="close-project-modal" type="button" class="btn cancel w-100">cancel</button></p>
                </div>
            </form>
        </div>
    </div>
</section>