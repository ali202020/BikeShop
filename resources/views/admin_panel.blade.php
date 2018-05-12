<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="form-control"> 
	
		{!! Form::open(['route' => ['admin.store'],'method' => 'POST','files' => true ]) !!}

			{{ Form::label('product_name', 'Product Name',null,['class' => 'form-control'])}}
			{{ Form::text('product_name',null,array('class' => 'form-control'))}}

			{{ Form::label('price', 'Product Price',null,['class' => 'form-control']) }}
			{{ Form::number('price')}}


			{{ Form::label('product_type', 'Product Type',null,['class' => 'form-control']) }}
			{{ Form::select('product_type', ['bikes' => 'bikes', 'extras' => 'extras','accessories' => 'accessories'],'bikes')}}

			{{ Form::label('product_brand', 'Product Type',null,['class' => 'form-control']) }}
			{{ Form::select('product_brand', ['Lezyne' => 'Lezyne', 'Marzocchi' => 'Marzocchi','EBC' => 'EBC','Oakley' => 'Oakley', 'Jagwire' => 'Jagwire','Yeti Cycles' => 'Yeti Cycles','Vee Rubber' => 'Vee Rubber','Zumba' => 'Zumba'],'Lezyne')}}



			{{ Form::label('quantity', 'Product Available Quantity') }}
			{{ Form::number('quantity')}}


			{{ Form::label('description', 'Descripton') }}
			{{ Form::textarea('description')}}


			{{ Form::label('product_image_link', 'Upload Product Image') }}
			{{ Form::file('product_image_link')}}

			{{Form::submit('save')}}
		{!! Form::close() !!}
		</div>

	</div>






		





    
	{!! Form::close() !!}

</body>
</html>