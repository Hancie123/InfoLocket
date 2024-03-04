<?php

use App\Model\Album;
use App\Model\Category;
use App\Model\PostType;
use App\Model\UserInfo;
use App\Model\GobalPost;
use App\Model\SiteSetting;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Model\GobalPostMeta;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;





function bookdelete($data)
{
    if ($data->book) {
        File::delete(public_path($data->book));
    }
}

function array_add($array, $key, $value)
{
    return Arr::add($array, $key, $value);
}

function seperator($depth)
{
    $space = '';
    for ($i = 1; $i < $depth; $i++) {
        $space .= '-';
    }
    return $space;
}


function responseSuccessMsg($msg = "", $code = "")
{
    return response([
        'status' => 'success',
        'message' => $msg,
    ], $code != '' ? $code : 200);
}


function queryFilter($model, $condition)
{
    // dd($condition);
    $result = $model->when(isset($condition['whereHasCondition']), function ($q) use ($condition) {
        foreach ($condition['whereHasCondition'] as $item) {
            $q->whereHas($item['relation'], function ($q1) use ($item) {
                if (strtotime($item['value'])) {
                    $q1->whereDate($item['columnName'], $item['value']);
                } else {
                    $q1->where($item['columnName'], $item['value']);
                }
            });
        }
    })->when(isset($condition['whereDoesntHaveCondition']), function ($q) use ($condition) {
        foreach ($condition['whereDoesntHaveCondition'] as $item) {
            $q->whereDoesntHave($item['relation'], function ($q1) use ($item) {
                if (strtotime($item['value'])) {
                    $q1->whereDate($item['columnName'], $item['value']);
                } else {
                    $q1->where($item['columnName'], $item['value']);
                }
            });
        }
    })->when(isset($condition['whereCondition']), function ($q) use ($condition) {
        foreach ($condition['whereCondition'] as $item) {
            if (strtotime($item['value'])) {
                $q->whereDate($item['columnName'], $item['value']);
            } else {
                $q->where($item['columnName'], $item['value']);
            }
        }
    })
        ->when(isset($condition['whereNotCondition']), function ($q) use ($condition) {
            foreach ($condition['whereNotCondition'] as $item) {
                if (strtotime($item['value'])) {
                    $q->whereDate($item['columnName'], '!=', $item['value']);
                } else {
                    $q->where($item['columnName'], '!=', $item['value']);
                }
            }
        })
        ->when(isset($condition['orWhereCondition']), function ($q) use ($condition) {
            foreach ($condition['orWhereCondition'] as $item) {
                if (strtotime($item['value'])) {
                    $q->orWhereDate($item['columnName'], $item['value']);
                } else {
                    $q->orWhere($item['columnName'], $item['value']);
                }
            }
        })->when(isset($condition['searchKeyword']), function ($q) use ($condition, $model) {
            foreach ($condition['searchKeyword'] as $item) {
                // if ($item['columnName'] == '*') {
                //     $modelName = $model;
                //     $tableName = (new $modelName)->getTable();
                //     $columnsToSearch = Schema::getColumnListing($tableName);
                //     $q->where(function ($query) use ($item, $columnsToSearch) {
                //         foreach ($columnsToSearch as $column) {
                //             // foreach ($item['columnName'] as $column) {
                //             $query->orWhere($column, 'like', '%' . $item['value'] . '%');
                //         }
                //     });
                // } else {
                // dd('dsf');
                $q->where($item['columnName'], 'like', '%' . $item['value'] . '%');
                // if (strtotime($item['value'])) {
                //     // dd('asdf');
                //     $q->whereDate($item['columnName'], 'like', '%' . $item['value'] . '%');
                // } else {
                //     // dd('000');
                //     $q->where($item['columnName'], 'like', '%' . $item['value'] . '%');
                // }
                // }
            }
        })->when(isset($condition['operatorCondition']), function ($q) use ($condition) {
            foreach ($condition['operatorCondition'] as $item) {
                if (strtotime($item['value'])) {
                    $q->whereDate($item['columnName'], $item['operator'], $item['value']);
                } else {
                    $q->where($item['columnName'], $item['operator'], $item['value']);
                }
            }
        })->when(isset($condition['betweenCondition']), function ($q) use ($condition) {
            foreach ($condition['betweenCondition'] as $item) {
                $q->whereBetween($item['columnName'], $item['value']);
            }
        })->when(isset($condition['whereBetweenCondition']), function ($q) use ($condition) {
            foreach ($condition['whereBetweenCondition'] as $item) {
                $q->whereBetween($item['columnName'], [$item['value1'], $item['value2']]);
                // $q->whereBetween($item['columnName2'], [$item['value1'], $item['value2']]);
            }
        })->when(isset($condition['whereRawCondition']), function ($q) use ($condition) {
            foreach ($condition['whereRawCondition'] as $item) {
                $q->whereRaw($item);
            }
        })->when(isset($condition['sortRawCondition']), function ($q) use ($condition) {
            foreach ($condition['sortRawCondition'] as $item) {
                $q->orderByRaw($item);
            }
        })->when(isset($condition['sortCondition']), function ($q) use ($condition) {
            foreach ($condition['sortCondition'] as $item) {
                $q->orderBy($item['columnName'], $item['value']);
            }
        })->when(isset($condition['whereHasConditionThenSearchKeyword']), function ($q) use ($condition) {
            foreach ($condition['whereHasConditionThenSearchKeyword'] as $item) {
                $q->whereHas($item['relation'], function ($q1) use ($item) {
                    if (strtotime($item['value'])) {
                        $q1->whereDate($item['columnName'], 'like', '%' . $item['value'] . '%');
                    } else {
                        $q1->where($item['columnName'], 'like', '%' . $item['value'] . '%');
                    }
                });
            }
        });
    return $result;
}