<?php
$post_type = \Request::get('post_type');
$extra_topics = (isset($post) && isset($post->translate($current_lang)->post_trans_extra) )? json_decode($post->translate($current_lang)->post_trans_extra, true) : [];
?>

<div>
    <ul class="nav nav-pills nav-stacked col-md-2">
        <li class="active"><a href="#tab_a" data-toggle="pill">Topic 1</a></li>
        <li><a href="#tab_b" data-toggle="pill">Topic 2</a></li>
        <li><a href="#tab_c" data-toggle="pill">Topic 3</a></li>
        <li><a href="#tab_d" data-toggle="pill">Topic 4</a></li>
        <li><a href="#tab_e" data-toggle="pill">Topic 5</a></li>
        <li><a href="#tab_f" data-toggle="pill">Topic 6</a></li>
    </ul>
    <div class="tab-content col-md-10">
        <div class="tab-pane active" id="tab_a">
            <div class="form-group">
                <div class="col-md-12">
                    <input placeholder="Topic 1 Title" type="text" name="trans_extra[topic_title_1]" class="form-control" value="{{ isset($extra_topics['topic_title_1']) ? $extra_topics['topic_title_1']: '' }}">
                    @if ($errors->has('topic_title_1'))
                        <span class="help-block">{{ $errors->first('topic_title_1') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('topic_body_1') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <textarea name="trans_extra[topic_body_1]" class="ckeditor form-control" rows="4">{{ isset($extra_topics['topic_body_1']) ? $extra_topics['topic_body_1']: '' }}</textarea>
                    @if ($errors->has('topic_body_1'))
                        <span class="help-block">{{ $errors->first('topic_body_1') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab_b">
            <div class="form-group">
                <div class="col-md-12">
                    <input placeholder="Topic 2 Title" type="text" name="trans_extra[topic_title_2]" class="form-control" value="{{ isset($extra_topics['topic_title_2']) ? $extra_topics['topic_title_2']: '' }}">
                    @if ($errors->has('topic_title_2'))
                        <span class="help-block">{{ $errors->first('topic_title_2') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('topic_body_2') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <textarea name="trans_extra[topic_body_2]" class="ckeditor form-control" rows="4">{{ isset($extra_topics['topic_body_2']) ? $extra_topics['topic_body_2']: '' }}</textarea>
                    @if ($errors->has('topic_body_2'))
                        <span class="help-block">{{ $errors->first('topic_body_2') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab_c">
            <div class="form-group">
                <div class="col-md-12">
                    <input placeholder="Topic 3 Title" type="text" name="trans_extra[topic_title_3]" class="form-control" value="{{ isset($extra_topics['topic_title_3']) ? $extra_topics['topic_title_3']: '' }}">
                    @if ($errors->has('topic_title_3'))
                        <span class="help-block">{{ $errors->first('topic_title_3') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('topic_body_3') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <textarea name="trans_extra[topic_body_3]" class="ckeditor form-control" rows="4">{{ isset($extra_topics['topic_body_3']) ? $extra_topics['topic_body_3']: '' }}</textarea>
                    @if ($errors->has('topic_body_3'))
                        <span class="help-block">{{ $errors->first('topic_body_3') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab_d">
            <div class="form-group">
                <div class="col-md-12">
                    <input placeholder="Topic 4 Title" type="text" name="trans_extra[topic_title_4]" class="form-control" value="{{ isset($extra_topics['topic_title_4']) ? $extra_topics['topic_title_4']: '' }}">
                    @if ($errors->has('topic_title_4'))
                        <span class="help-block">{{ $errors->first('topic_title_4') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('topic_body_4') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <textarea name="trans_extra[topic_body_4]" class="ckeditor form-control" rows="4">{{ isset($extra_topics['topic_body_4']) ? $extra_topics['topic_body_4']: '' }}</textarea>
                    @if ($errors->has('topic_body_4'))
                        <span class="help-block">{{ $errors->first('topic_body_4') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab_e">
            <div class="form-group">
                <div class="col-md-12">
                    <input placeholder="Topic 5 Title" type="text" name="trans_extra[topic_title_5]" class="form-control" value="{{ isset($extra_topics['topic_title_5']) ? $extra_topics['topic_title_5']: '' }}">
                    @if ($errors->has('topic_title_5'))
                        <span class="help-block">{{ $errors->first('topic_title_5') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('topic_body_5') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <textarea name="trans_extra[topic_body_5]" class="ckeditor form-control" rows="4">{{ isset($extra_topics['topic_body_5']) ? $extra_topics['topic_body_5']: '' }}</textarea>
                    @if ($errors->has('topic_body_5'))
                        <span class="help-block">{{ $errors->first('topic_body_5') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab_f">
            <div class="form-group">
                <div class="col-md-12">
                    <input placeholder="Topic 6 Title" type="text" name="trans_extra[topic_title_6]" class="form-control" value="{{ isset($extra_topics['topic_title_6']) ? $extra_topics['topic_title_6']: '' }}">
                    @if ($errors->has('topic_title_6'))
                        <span class="help-block">{{ $errors->first('topic_title_6') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('topic_body_6') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <textarea name="trans_extra[topic_body_6]" class="ckeditor form-control" rows="4">{{ isset($extra_topics['topic_body_6']) ? $extra_topics['topic_body_6']: '' }}</textarea>
                    @if ($errors->has('topic_body_6'))
                        <span class="help-block">{{ $errors->first('topic_body_6') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div><!-- tab content -->
</div><!-- end of container -->