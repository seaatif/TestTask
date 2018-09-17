@extends('layout.default')

@section('content')
	<div class="card">
		<div class="card-header">Dashboard</div>
		
		<div class="card-body">
			<form class="save-options" action="{{route('options.save')}}" method="post" accept-charset="UTF-8">
				<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
				
				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif
				
				<div class="games-table">
					<table class="table">
						<thead class="thead-dark">
						<tr>
							<td scope="col">ID</td>
							<td scope="col">Game Name</td>
							<td scope="col">Description</td>
							<td>Game Options</td>
							<td scope="col">Action</td>
						</tr>
						</thead>
						<tbody>
						@if(count($games) > 0)
							@foreach($games as $game)
								<tr>
									<td>{{$game->id}}</td>
									<td>{{$game->name}}</td>
									<td>{{$game->description}}</td>
									<td>{{$game->json_options}}</td>
									<td>
										<a href="javascript:" class="btn btn-outline-primary edit-options" data-id="{{$game->id}}" data-content="{{$game->json_options}}">Edit Options</a>
									</td>
								</tr>
							@endforeach
						@endif
						</tbody>
					</table>
				</div>
				
				<div class="editor-wrap">
					<div id="json-editor" class="mb-3" style="height: 200px"></div>
					
					<div class="buttons mt-1 text-right">
						<input type="hidden" name="id" value="" id="id-field">
						<input type="hidden" name="json_options" value="" id="options-field">
						<input type="submit" class="btn btn-primary" id="submit-btn" value="Save">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="card my-3">
		<script type="application/javascript">
			jQuery(document).ready(function ($) {
				var wrap = $('.editor-wrap').hide();
				var container = $('#json-editor');
				editor = new JSONEditor(container.get(0), {
					// onEditable: function (node) {
					//     return {
					//         field: false,
					//         value: true
					//     };
					// }
					mode: 'form'
				});
				editor.set(container.data('content'));
				
				$('.edit-options').click(function (e) {
					editor.set($(this).data('content'));
					$('#id-field').val($(this).data('id'));
					wrap.show();
				});
				$('#submit-btn').click(function () {
					$('#options-field').val(editor.getText());
				});
			});
		</script>
	</div>
@endsection
