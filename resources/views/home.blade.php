@extends('layouts.app')

@section('content')
	<h2>Contact List</h2>

	<div class="container">

		<table class="isu-pt-table wd-Paginator-table table-striped aligned">
			<thead>
				<tr>
					@foreach($headers as $col)
						<th colspan="1">
							<a href="?sort={{ $col["key"]  }}&sort_by={{ empty($col["order"]) ? "asc" : $col["order"] }}">
								{{ $col["display"] }}
								@if (empty($col["order"]))
									<span class="fas fa-sort"></span>
								@elseif ($col["order"] === "desc")
									<span class="fas fa-sort-up"></span>
								@else
									<span class="fas fa-sort-down"></span>
								@endif
							</a>
						</th>
					@endforeach
				</tr>
			</thead>
			<tbody>
				@foreach($contacts as $contact)
					<tr>
						@foreach($headers as $col)
							<td>
								{{ $contact->getAttribute($col["key"]) }}
							</td>
						@endforeach
					</tr>
				@endforeach
			</tbody>
		</table>

		<script>
			const contacts = @json($contacts);
			const cols = @json($headers);
			console.log(contacts.data, cols);
		</script>
		<br>

	</div>

	<div style="float:right;">
		@if (empty($sort))
			{{ $contacts->links() }}
		@else
			{{ $contacts->appends(['sort' => $sort, 'sort_by' => $by, ])->links() }}
		@endif
	</div>
@endsection
