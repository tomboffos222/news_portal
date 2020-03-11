@extends('layouts.admin')


@section('content')
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 		 Добавить товар
	</button>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>
					фото
				</th>
				<th>
					Имя
				</th>
				<th>
					Цена
				</th>
				<th>
					Характеристики
				</th>

				<th>
					Статус
				</th>

				<th>
					Действия
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
				<tr>
					<td>
						<img src="{!! $product->img !!}" alt="">
					</td>
					<td>
						{{$product->title}}
					</td>
					<td>
						{{$product->price}}

					</td>
					<td>
						{{$product->size}}
					</td>
					<td>
						@if($product->status  == 1)
							В наличии
						@else
							Нет в наличии
						@endif

					</td>
					<td>
                        <a href="{{Route('admin.DeleteProduct',$product->id)}}" class="btn btn-danger">Удалить</a>
                    </td>



				</tr>

			@endforeach

		</tbody>


	</table>
	{{$products->links()}}
	<style>
		td img{

			height: 150px;
			width: 100%;
		}
		td{
			width: 12%;
		}

	</style>


<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Добавить товар</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="{{Route('admin.CreateProduct')}}" method="post" enctype="multipart/form-data" >
                    {{ csrf_field() }}
		        	<label for="">Фото</label>
                    <input name="image" type="file"  >
		        	<br>
		        	<input type="text"  name="title" class="form-control" placeholder="Название ">
		        	<br>
		        	<input type="number" name="price" placeholder="Цена" class="form-control">
		        	<br>
                    <input type="text" class="form-control" placeholder="Размер" name="size">
                    <br>
                    <input type="text" class="form-control" placeholder="Тип материала" name="type">
                    <br>
		        	<select name="category" class="custom-select" id="" style="width: 100%;">
		        		@foreach($categories as $category)
		        		<option value="{{$category->id}}" class="form-control">{{$category->chars}}</option>
		        		@endforeach
		        	</select>
		        	<br>

		        	<textarea placeholder="Описание" class="form-control" name="description"></textarea>
		        	<br>
		        	<input type="checkbox" placeholder="" id="stock" name="stock"><label for="stock">Товар в наличии</label>
		        	<br>
		        	<input type="submit" class="btn btn-primary form-control">
		        </form>
		      </div>
		      <div class="modal-footer">


		      </div>
		    </div>
		  </div>
		</div>
		<style>
			button.dropdown-toggle{
				display: none;

			}
			select{
				margin-bottom: 20px;
			}
		</style>
@endsection


