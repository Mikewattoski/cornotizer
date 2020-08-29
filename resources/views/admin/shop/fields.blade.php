 <div class="col-md-12">
                                            <div class="form-group">
                                                {{ Form::label('shop name', 'Shop Name:')}}
                                                {{                                              Form::text('name',$pro->name, ['class' => 'form-control border-input','placeholder'=>'big bazzar'])}}

                                                
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('address', 'Shop Address:')}}
                                                {{                                              Form::text('address',$pro->address, ['class' => 'form-control border-input','placeholder'=>''])}}

                                                
                                               
                                            </div>
                                            
                                            <div class="form-group">
                                                {{ Form::label('description', 'Shop Description:')}}
                                                {{                                              Form::textarea('description',$pro->description, ['class' => 'form-control border-input','cols'=>'30' ,'rows'=>'10','placeholder'=>'Product Description'])}}

                                                
                                            </div>
 <div class="form-group">
                                                {{ Form::label('file', 'File:')}}
                                                 {{                                              Form::file('image', ['class' => 'form-control border-input'])}}
                                                
                                               

                                        </div>
                                            