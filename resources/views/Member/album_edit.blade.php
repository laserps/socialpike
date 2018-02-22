@extends('Member.layouts.app')

@section('cssbottom')
@endsection

@section('content')
    <div class="col-12 col-md-8">



						<!-- Start Post -->
						<!-- ##################### FIRST POST ############################ -->
						<div class="card mb-4">

							<h3 class="my-3 mx-5"><i class="fa fa-picture-o fa-lg mt-4 profilesetting-icon-color"></i></i> Photos</h3>

              <div class="row ml-5 mb-3">
                <form class="edit-album-form">
                  <h3 for="exampleInputEmail1">Edit : Album 1</h3>
                  <div class="form-group">
                    <label class="grey-text" for="">Album name</label>
                    <input type="email" class="form-control edit-album-input input-rounded" id="" aria-describedby="emailHelp" placeholder="">
                  </div>
                  <div class="form-group">
                    <label class="grey-text"  for="">Album description</label>
                    <input type="password" class="form-control edit-album-input input-rounded" id="" placeholder="">
                  </div>
                  <button type="submit" class="btn btn-normal btn-sm edit-album-save">Save</button>
                </form>
              </div>


							<div class="row">

								 <div class="col-12 col-lg-4 edit-album-margin">
                   <!-- Add Photos Cards-->
                   <a  data-toggle="modal" data-target="#add-album-picture">
                     <div class="album-card card--big add-album-card">
                        <span style="vertical-align: middle;  display: inline-block;  line-height: normal;">
                          + Add picture
                        </span>
                     </div>
                   </a>
                   <!-- END Add Photos Cards-->
								 </div>

                 <!-- Add-album-picture Modal-->
                 <div class="modal fade" id="add-album-picture">
                   <div class="modal-dialog">
                     <div class="modal-content">
                       <!-- Modal Header -->
                       <div class="modal-header">
                         <h4 class="modal-title">Add picture</h4>
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                       </div>
                       <!-- Modal body -->
                       <div class="modal-body">
                          <div class="form-group">
                            <label class="grey-text" for="">Upload your image</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                          </div>
                          <div class="form-group">
                            <label class="grey-text" for="">Caption</label>
                            <input type="text" class="form-control edit-album-input input-rounded" id="" aria-describedby="emailHelp" placeholder="">
                          </div>
                       </div>
                       <!-- Modal footer -->
                       <div class="modal-footer">
                         <button type="button" class="btn btn-normal btn-sm edit-album-save">Upload</button>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- END Add-album-picture Modal-->


                 <div class="col-12 col-lg-4 edit-album-margin">
                   <!-- Cards-->
                   <div class="album-card card--big album-card-edit">
                     <div class="card__image-edit" style="background-image: url(https://placeimg.com/640/480/nature);"></div>
                   </div>
                   <div class="card__delete">
                     <button type="submit" class="btn btn-delete">X</button>
                   </div>
                   <div class="edit-album-caption">
                     <p>Located two hours south of Sydney inLocated two hours south of Sydney inLocated two hours south of Sydney in</p>
                   </div>
                   <div class="social-action-edit-album">
                      <div class="pt-2">
                        <a href="#" class="icon-like">
                          <span class="icon-action">485</span>
                        </a>
                      </div>
                      <div class="pt-2">
                        <a href="#" class="icon-comment">
                          <span class="icon-action">65</span>
                        </a>
                      </div>
                      <div class="pt-2">
                        <a href="#" class="icon-share" data-toggle="modal" data-target="#shareModal">
                          <span class="icon-action">1</span>
                        </a>
                      </div>
                    </div>
                   <!-- END Cards-->
                </div>

                <div class="col-12 col-lg-4 edit-album-margin">
                  <!-- Cards-->
                  <div class="album-card card--big album-card-edit">
                    <div class="card__image-edit" style="background-image: url(https://placeimg.com/640/480/nature);"></div>
                  </div>
                  <div class="card__delete">
                    <button type="submit" class="btn btn-delete">X</button>
                  </div>
                  <div class="edit-album-caption">
                    <p>Located two hours south of Sydney inLocated two hours south of Sydney inLocated two hours south of Sydney in</p>
                  </div>
                  <div class="social-action-edit-album">
                     <div class="pt-2">
                       <a href="#" class="icon-like">
                         <span class="icon-action">485</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-comment">
                         <span class="icon-action">65</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-share" data-toggle="modal" data-target="#shareModal">
                         <span class="icon-action">1</span>
                       </a>
                     </div>
                   </div>
                  <!-- END Cards-->
                </div>

                <div class="col-12 col-lg-4 edit-album-margin">
                  <!-- Cards-->
                  <div class="album-card card--big album-card-edit">
                    <div class="card__image-edit" style="background-image: url(https://placeimg.com/640/480/nature);"></div>
                  </div>
                  <div class="card__delete">
                    <button type="submit" class="btn btn-delete">X</button>
                  </div>
                  <div class="edit-album-caption">
                    <p>Located two hours south of Sydney inLocated two hours south of Sydney inLocated two hours south of Sydney in</p>
                  </div>
                  <div class="social-action-edit-album">
                     <div class="pt-2">
                       <a href="#" class="icon-like">
                         <span class="icon-action">485</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-comment">
                         <span class="icon-action">65</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-share" data-toggle="modal" data-target="#shareModal">
                         <span class="icon-action">1</span>
                       </a>
                     </div>
                   </div>
                  <!-- END Cards-->
                </div>

                <div class="col-12 col-lg-4 edit-album-margin">
                  <!-- Cards-->
                  <div class="album-card card--big album-card-edit">
                    <div class="card__image-edit" style="background-image: url(https://placeimg.com/640/480/nature);"></div>
                  </div>
                  <div class="card__delete">
                    <button type="submit" class="btn btn-delete">X</button>
                  </div>
                  <div class="edit-album-caption">
                    <p>Located two hours south of Sydney inLocated two hours south of Sydney inLocated two hours south of Sydney in</p>
                  </div>
                  <div class="social-action-edit-album">
                     <div class="pt-2">
                       <a href="#" class="icon-like">
                         <span class="icon-action">485</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-comment">
                         <span class="icon-action">65</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-share" data-toggle="modal" data-target="#shareModal">
                         <span class="icon-action">1</span>
                       </a>
                     </div>
                   </div>
                  <!-- END Cards-->
                </div>

                <div class="col-12 col-lg-4 edit-album-margin">
                  <!-- Cards-->
                  <div class="album-card card--big album-card-edit">
                    <div class="card__image-edit" style="background-image: url(https://placeimg.com/640/480/nature);"></div>
                  </div>
                  <div class="card__delete">
                    <button type="submit" class="btn btn-delete">X</button>
                  </div>
                  <div class="edit-album-caption">
                    <p>Located two hours south of Sydney inLocated two hours south of Sydney inLocated two hours south of Sydney in</p>
                  </div>
                  <div class="social-action-edit-album">
                     <div class="pt-2">
                       <a href="#" class="icon-like">
                         <span class="icon-action">485</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-comment">
                         <span class="icon-action">65</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-share" data-toggle="modal" data-target="#shareModal">
                         <span class="icon-action">1</span>
                       </a>
                     </div>
                   </div>
                  <!-- END Cards-->
                </div>
                <div class="col-12 col-lg-4 edit-album-margin">
                  <!-- Cards-->
                  <div class="album-card card--big album-card-edit">
                    <div class="card__image-edit" style="background-image: url(https://placeimg.com/640/480/nature);"></div>
                  </div>
                  <div class="card__delete">
                    <button type="submit" class="btn btn-delete">X</button>
                  </div>
                  <div class="edit-album-caption">
                    <p>Located two hours south of Sydney inLocated two hours south of Sydney inLocated two hours south of Sydney in</p>
                  </div>
                  <div class="social-action-edit-album">
                     <div class="pt-2">
                       <a href="#" class="icon-like">
                         <span class="icon-action">485</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-comment">
                         <span class="icon-action">65</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-share" data-toggle="modal" data-target="#shareModal">
                         <span class="icon-action">1</span>
                       </a>
                     </div>
                   </div>
                  <!-- END Cards-->
                </div>
                <div class="col-12 col-lg-4 edit-album-margin">
                  <!-- Cards-->
                  <div class="album-card card--big album-card-edit">
                    <div class="card__image-edit" style="background-image: url(https://placeimg.com/640/480/nature);"></div>
                  </div>
                  <div class="card__delete">
                    <button type="submit" class="btn btn-delete">X</button>
                  </div>
                  <div class="edit-album-caption">
                    <p>Located two hours south of Sydney inLocated two hours south of Sydney inLocated two hours south of Sydney in</p>
                  </div>
                  <div class="social-action-edit-album">
                     <div class="pt-2">
                       <a href="#" class="icon-like">
                         <span class="icon-action">485</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-comment">
                         <span class="icon-action">65</span>
                       </a>
                     </div>
                     <div class="pt-2">
                       <a href="#" class="icon-share" data-toggle="modal" data-target="#shareModal">
                         <span class="icon-action">1</span>
                       </a>
                     </div>
                   </div>
                  <!-- END Cards-->
                </div>


						</div>

					</div>
						<!-- End Post -->
					</div>


	</div>
@endsection

@section('jsbottom')
@endsection
