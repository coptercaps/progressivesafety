@extends('master')

@section('content')

	<section class="bar background-gray no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h1>Beställ av oss</h1>
                            <p>Vänligen fyll i formulär så återkommer vi med prisinformation.</p>
                        </div>

                        @if (session('status'))
                        	{!! session('status') !!}
                        @endif

                        <div class="col-md-12">
                        	<div class="row">
                        		<div class="col-md-12">
                        		<!--	<img src="img/hero2_cropped.jpg" width="300" class="img-responsive img-circle"> -->
                        		</div>
                        		<div class="col-md-12">
                        			<h3>Släck med förtroende</h3>
                        			<p>Vår produkt <b>EasyExtinguish</b> kommer att hjälpa dig och alla potentiella användare att släcka en brand.</p>
                        			<p>I ett stort bostadshus, liten lägenhet, offentliga rum och annat har nu högst troligtvis en brandsläckare som inte är anpassad för alla. Med bara en så enkel lösning som vår produkt kan alla använda en brandsläckare.</p>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<h3>Tillvägagångssätt</h3>
                        		<p>När du bestämt dig för att ta kontakt med oss, fyll minst i de fält som är markerade med stjärna (*) och klicka sedan på "Skicka offert".</p>
                        		<p>Så snart vi kan återkommer vi till dig med ett prisförslag baserat på de uppgifter du lämnat till oss.
                        			Därefter får du gå igenom vårt förslag och återkomma vare sig du är nöjd eller inte. Vi är inte sena med att mottaga andra förslag eller idéer, det viktiga är att vi kommer överens.</p>
                        	</div>
													<a href="mailto:info@progressivesafety.se?Subject=Hello%20again" class="btn btn-small btn-template-main">Skicka meddelande</a>

                        </div>
                    <!--     <div class="col-md-6">

                  <form method="post">
                        		{!! csrf_field() !!}
                        		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        			<label>Namn / Företagsnamn *</label>
                        			<input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        			@if ($errors->has('name'))
                        				<span class="help-block">
                        					<strong>{{ $errors->first('name') }}</strong>
                        				</span>
                        			@endif
                        		</div>

                        		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        			<label>Email *</label>
                        			<input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        			@if ($errors->has('email'))
                        				<span class="help-block">
                        					<strong>{{ $errors->first('email') }}</strong>
                        				</span>
                        			@endif
                        		</div>

                        		<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                        			<label>Adress</label>
                        			<input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        			@if ($errors->has('address'))
                        				<span class="help-block">
                        					<strong>{{ $errors->first('address') }}</strong>
                        				</span>
                        			@endif
                        		</div>

                        		<div class="form-group {{ $errors->has('postal_number') ? 'has-error' : '' }}">
                        			<label>Postnummer</label>
                        			<input type="text" class="form-control" name="postal_number" value="{{ old('postal_number') }}">
                        			@if ($errors->has('postal_number'))
                        				<span class="help-block">
                        					<strong>{{ $errors->first('postal_number') }}</strong>
                        				</span>
                        			@endif
                        		</div>

                        		<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                        			<label>Stad</label>
                        			<input type="text" class="form-control" name="city" value="{{ old('city') }}">
                        			@if ($errors->has('city'))
                        				<span class="help-block">
                        					<strong>{{ $errors->first('city') }}</strong>
                        				</span>
                        			@endif
                        		</div>
                        		<hr/>
                        		<div class="form-group {{ $errors->has('number_of_items') ? 'has-error' : '' }}">
                        			<label>Antal</label>
                        			<select name="number_of_items" class="form-control">
                        				@foreach($items as $item)
                        					<option value="{!! $item !!}">{!! $item !!}</option>
                        				@endforeach
                        			</select>
                        			@if ($errors->has('number_of_items'))
                        				<span class="help-block">
                        					<strong>{{ $errors->first('number_of_items') }}</strong>
                        				</span>
                        			@endif
                        		</div>

                        		<div class="form-group {{ $errors->has('other') ? 'has-error' : '' }}">
                        			<label>Övriga upplysningar</label>
									<textarea name="other" class="form-control">{{ old('other') }}</textarea>
                        			@if ($errors->has('other'))
                        				<span class="help-block">
                        					<strong>{{ $errors->first('other') }}</strong>
                        				</span>
                        			@endif
                        		</div>

                        		<input type="submit" class="btn btn-danger btn-block" value="Skicka">
                        	</form> -->
                        </div>

                        <!-- /.owl-carousel -->
                    </div>
                </div>
            </div>
	</section>

@endsection
