<?php

class Popular extends Eloquent
{
    protected $table = 'popular';
    protected $hidden = ['created_at', 'updated_at'];
}