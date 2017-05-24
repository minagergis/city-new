<div class="portlet box green-meadow languages">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Languages
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
            <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body lang {{ $errors->has('locale') ? 'has-error' : '' }}">
        <div class="row">
            <div class="col-md-2">
                @if(isset($language))
                    @foreach($language as $lang)
                        @if($current_lang == $lang->locale)  <i class="glyphicon bfh-flag-{{$lang->icon}}"></i> @endif
                    @endforeach
                @endif
            </div>
            <div class="col-md-10">
                <select name="locale" id="language" class="form-control">
                    <option value="" hidden>Select language...</option>
                    @if(isset($language))
                        @foreach($language as $lang)
                            <option value="{{ $lang->locale }}" data-flag="{{ $lang->icon }}"
                                    @if($current_lang == $lang->locale) selected @endif>{{ $lang->name }}</option>
                        @endforeach
                    @endif
                </select>
                @if ($errors->has('locale'))
                    <span class="help-block">{{ $errors->first('locale') }}</span>
                @endif
            </div>
        </div>
    </div>
</div>


<div class="portlet box green-meadow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-paper-plane-o"></i>Publish
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
            <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body pub">
        <div class="row">
            <div class="col-md-6">
                <button type="submit" name="draft" class="btn default btn-sm">Save draft</button>
            </div>
            <div class="col-md-6 right"><a href="javascript:;" class="btn default btn-sm"> Preview </a></div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <i class="fa fa-key"></i> Status: <b>{{ isset($post) ? ucfirst($post->post_status) : 'Publish' }}</b>
                <a>Edit</a>
            </div>
            <div class="col-md-12">
                <i class="fa fa-eye"></i> Visibility: <b>Public</b> <a>Edit</a>
            </div>
            <div class="col-md-12">
                <i class="fa fa-calendar"></i> Publish <b>immediately</b> <a>Edit</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" name="trash" class="trash">Move to trash</button>
            </div>
            <div class="col-md-6 right">
                <button type="submit" name="publish"
                        class="btn blue btn-sm">{{ isset($action) && $action == 'edit' ?  'Update' : 'Publish' }}</button>
                <br>
            </div>
        </div>
    </div>
</div>

@if(\Request::get('post_type') == 'Properties')
    <?php
    $post_type = \Request::get('post_type');
    $extra_sales = isset($post) ? json_decode($post->extra, true) : [];
    ?>
    <div class="portlet box green-meadow attributes">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>Property Sales
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
            </div>
        </div>
        <div class="portlet-body lang">
            <div class="row">
                <div class="col-md-12">Parent</div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <select name="extra[sales]" id="" class="form-control">
                        <option value="1" @if(isset($extra_sales['sales']) && $extra_sales['sales'] == 1) selected @endif>Sales Open Now</option>
                        <option value="0" @if(isset($extra_sales['sales']) && $extra_sales['sales'] == 0) selected @endif>Sales Closed Now</option>
                    </select>
                </div>
            </div>

        </div>
    </div>
@endif
@if(\Request::get('post_type') == 'Properties' || \Request::get('post_type') == 'Gallary'|| \Request::get('post_type') == 'Award' )

    <div class="portlet box green-meadow categories">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-list"></i>Categories
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
            </div>

        </div>
        <div class="portlet-body">
            <div class="tab-content">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#portlet_tab1" data-toggle="tab" aria-expanded="false">All</a>
                    </li>
                    {{--<li class="">--}}
                    {{--<a href="#portlet_tab2" data-toggle="tab" aria-expanded="true">Most Used</a>--}}
                    {{--</li>--}}
                </ul>
                <div class="tab-pane active" id="portlet_tab1">
                    <div class="md-checkbox-list">

                        @foreach($categories as $category)
                            <div class="md-checkbox">
                                <input type="checkbox" id="checkbox{{ $category->id }}" class="md-check"
                                       name="category[]"
                                       value="{{ $category->id }}" {{ isset($categories_ids) && in_array($category->id, $categories_ids) ? 'checked' : '' }}>
                                <label for="checkbox{{ $category->id }}">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>{{ $category->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{--<div class="tab-pane" id="portlet_tab2">--}}
                {{--<div class="md-checkbox-list">--}}
                {{--<div class="md-checkbox">--}}
                {{--<input type="checkbox" id="checkbox4" class="md-check">--}}
                {{--<label for="checkbox4">--}}
                {{--<span></span>--}}
                {{--<span class="check"></span>--}}
                {{--<span class="box"></span> Option 1 </label>--}}
                {{--</div>--}}
                {{--<div class="md-checkbox">--}}
                {{--<input type="checkbox" id="checkbox5" class="md-check" checked>--}}
                {{--<label for="checkbox5">--}}
                {{--<span></span>--}}
                {{--<span class="check"></span>--}}
                {{--<span class="box"></span> Option 2 </label>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
            <a href="{{ route('admin.category.add.get') }}">+ Add New Category</a>
        </div>
    </div>
@endif

@if(\Request::get('post_type') == 'Properties')

    <div class="portlet box green-meadow facilties">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-list"></i>Faciltes
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
            </div>

        </div>
        <div class="portlet-body">
            <div class="tab-content">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#portlet_tab1" data-toggle="tab" aria-expanded="false">All</a>
                    </li>
                    {{--<li class="">--}}
                    {{--<a href="#portlet_tab2" data-toggle="tab" aria-expanded="true">Most Used</a>--}}
                    {{--</li>--}}
                </ul>
                <div class="tab-pane active" id="portlet_tab1">
                    <div class="md-checkbox-list">
                        <?php
                        $post_type = \Request::get('post_type');
                        $extra_fac = isset($post) ? json_decode($post->extra, true) : [];
                           // dd(in_array('gym',$extra_fac['facilties']));

                        $facilties_menu = array(
                                ['id' => 'home', 'name' => 'home'],
                                ['id' => 'gym', 'name' => 'gym'],
                                ['id' => 'shop', 'name' => 'shop'],
                                ['id' => 'pool', 'name' => 'pool'],
                                ['id' => 'drink', 'name' => 'drink'],
                                ['id' => 'green', 'name' => 'green'],
                                ['id' => 'resturant', 'name' => 'resturant'],
                                ['id' => 'disabled', 'name' => 'disabled'],
                                ['id' => 'camera', 'name' => 'camera'],
                                ['id' => 'stars', 'name' => 'stars'],
                                ['id' => 'wifi', 'name' => 'wifi'],
                                ['id' => 'parking', 'name' => 'parking'],
                        );

                        ?>

                        @foreach($facilties_menu as $facilty)

                            <div class="md-checkbox">
                                <input type="checkbox" id="checkbox{{ $facilty['id'] }}" class="md-check"
                                       name="extra[facilties][]"
                                       value="{{ $facilty['id'] }}"
                                         @if(isset($extra_fac['facilties']) && in_array($facilty['id'], $extra_fac['facilties'])) checked  @endif  >


                                <label for="checkbox{{ $facilty['id'] }}">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>{{ $facilty['name'] }}</label>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>

        </div>
    </div>
@endif



@include('admin::partials.featured_images')
