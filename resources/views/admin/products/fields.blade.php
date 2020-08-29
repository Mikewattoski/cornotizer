 <div class="col-md-12">
                                            <div class="form-group">
                                                {{ Form::label('product name', 'Product Name:')}}
                                                {{                                              Form::text('name',$pro->name, ['class' => 'form-control border-input','placeholder'=>'Macbook pro'])}}

                                                
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('price', 'Product Price:')}}
                                                {{                                              Form::text('price',$pro->price, ['class' => 'form-control border-input','placeholder'=>'$2500'])}}

                                                
                                               
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('shop_id', 'Shop id:')}}
                                                {{                                              Form::text('shop_id',$pro->shop_id, ['class' => 'form-control border-input','placeholder'=>'12'])}}

                                                
                                               
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('description', 'Product Description:')}}
                                                {{                                              Form::textarea('description',$pro->description, ['class' => 'form-control border-input','cols'=>'30' ,'rows'=>'10','placeholder'=>'Product Description'])}}

                                                
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('file', 'File:')}}
                                                 {{                                              Form::file('image', ['class' => 'form-control border-input'])}}
                                                
                                               

                                        </div>
