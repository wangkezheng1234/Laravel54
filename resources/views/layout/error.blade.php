<?php
/**
 * Created by PhpStorm.
 * User: wangkezheng
 * Date: 2018/7/18
 * Time: 1:21
 */
?>
@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            <li>{{$error}}</li>
        </div>
    @endforeach
@endif
