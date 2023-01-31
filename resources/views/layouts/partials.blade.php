@if(isset($create))
    @foreach($categories as $sub_category)

        <option value="{{$sub_category->id}}"> {{str_repeat('-----', $level)}} &nbsp; {{$sub_category->title}}</option>
        @if(count($sub_category->childrenRecursive)>0)
            @include('layouts.partials.partials',['categories'=>$sub_category->childrenRecursive ,'level'=>$level+1])
        @endif
    @endforeach
@elseif(isset($index))

    @foreach($categories as $sub_category)
      <tr>
        <td>{{$i++}}</td>
        <td>
            <span id="cat-{{$sub_category->id}}">{{$sub_category->title}}</span>
            @if($catEdit==1 && $cat==$sub_category->id)
                <span> <input wire:model.defer="title" type="text" class="form-control"
                              placeholder=""></span>
            @endif


        </td>

        <td>
            <span id="cat-{{$sub_category->id}}">{{str_repeat('-----', $level)}} &nbsp; {{$sub_category->en_title}} </span>
            @if($catEdit==1 && $cat==$sub_category->id)
                <span> <input wire:model.defer="en_title" type="text" class="form-control"
                              placeholder=""></span>
            @endif

        </td>

        <td>
            <img wire:click="$emit('editCat',{{$category->id}})" style="cursor: pointer;" width="35" class="img-fluid"
                 src="/admin/assets/img/icon/edit.png">
        </td>
        <td>

            <img wire:click="update({{$category->id}})" class="img-fluid" width="30" style="cursor: pointer;"
                 src="/admin/assets/img/icon/edit.png">
            <div wire:loading wire:target="update" >
                @if($loading==$category->id)
                    <div class="loader-wrapper d-flex justify-content-center align-items-center"><div class="loader">
                            <div class="ball-pulse"><div>
                                </div>
                                <div>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>


        </td>
        <td>
            <img wire:click="delete({{$category->id}})" class="img-fluid" style="cursor: pointer;" width="40" src="/admin/assets/img/icon/delete.png">

            <div wire:loading wire:target="delete" >
                @if($loading==$category->id)
                    <div class="loader-wrapper d-flex justify-content-center align-items-center"><div class="loader">
                            <div class="ball-pulse"><div>
                                </div>
                                <div>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </td>

        </tr>
        @if(count($sub_category->childrenRecursive) >0)
            @include('livewire.admin.category.partials',['categories'=>$category->childrenRecursive,'level'=>$level+1,'index'=>1])
        @endif

    @endforeach
@else

    @foreach($categories as $sub_category)

        <option value="{{$sub_category->id}}"
                @if($cat==$sub_category->id) selected @endif> {{str_repeat('-----', $level)}}
            &nbsp; {{$sub_category->title}}</option>
        @if(count($sub_category->childrenRecursive)>0)
            @include('livewire.admin.category.partials',['categories'=>$sub_category->childrenRecursive ,'level'=>$level+1,'edit'=>1])
        @endif
    @endforeach

@endif

