@extends('main')
@section('title', '| Contact')
 
  @section('content')

    <div class="row">
      <div class="col-md-12">
        <h1>Contact Me</h1>
        <hr>
        <form>
          <div class="form-group">
            <label name="email">Email:</label>
            <input type="text" name="email" class="form-control" id="email">
            </div>

            <div>
            <label name="subject">Subject:</label>
            <input type="text" name="subject" class="form-control" id="subject">
            </div>
            
            <div>
            <label name="message">Message:</label>
            <textarea id="message" class="form-control" name="message">Type your message here</textarea>
            </div>

            <div>
            <input type="submit" name="submit" value="Send Message" class="btn btn-success">
            </div>
        </form>
      </div>
    </div>
  @endsection
