@extends('layouts.app')
@section('title')
Register
@endsection

@section('content')
<!-- 
<div>
<form>
			<fieldset>
				 <legend>Registration Form</legend> -->

				<!-- <table >
                    <h3>Registration Form</h3>
					<tr >
						<td>Student Name </td>
                        <td >                        
                            <select name="" id="">
                            <option value="">Mr</option>
                            <option value="">Ms</option>
                        </select>
						<input type="text" name="" value="" > </td>
					</tr>
					<tr>
						<td>Father's Name </td>
						<td><input type="text" name="" value="" > </td>
					</tr>
					<tr>
						<td>Mother's Name </td>
						<td><input type="text" name="" value="" > </td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td><input type="date" name="" value="" > </td>
					</tr>
                    <tr>
						<td>Gender</td>
						<td>
							<input type="radio" name="gender" value=""> Male
							<input type="radio" name="gender" value=""> Female
						</td>
					</tr>
					<tr>
						<td>Email ID:</td>
						<td><input type="email" name="" value="" > </td>
					</tr>
					<tr>
						<td>Mobile No.</td>
						<td><input type="number" name="" value="" > </td>
					</tr>
					<tr>
						<td>Address</td>
						<td> <textarea></textarea></td>
					</tr>
					<tr>
						<td>State</td>
						<td><input type="text" name="" value="" > </td>
					</tr>
                    <tr>
						<td>City</td>
						<td><input type="text" name="" value="" > </td>
					</tr>
				</table>
			</fieldset>
            <input class="submit" type="submit" value="Submit">
 		</form>
</div> -->
<form action="/register" method="post">
	{{csrf_field()}}
Your Name : <input type="text" name="name" value="" >
@if($errors->has('name'))
<b>{{$errors->first('name')}}</b>
@endif
Your Age : <input type="number" name="age" value="" >
Email : <input type="email" name="email" value="" >
<input type="submit" value="Register">
</form>


@endsection