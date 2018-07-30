@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Answer</div>
                    <div class="card-body">
                        {{$answer->body}}
                    </div>
                    <div class="card-footer">
                        {{ Form::open(['method'  => 'DELETE', 'route' => ['answers.destroy', $question, $answer->id]])}}
                        <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">Delete
                        </button>
                        {!! Form::close() !!}
                        <a class="btn btn-primary float-right" href="{{ route('answers.edit',['question_id'=> $question, 'answer_id'=> $answer->id, ])}}">
                            Edit Answer
                        </a>
                    </div>
                    <div class="card-footer">
                    Rate this answer:
                        <div>
                            <button class="btn btn-success float-left mr-2 " value="submit" type="submit" id="submit">Like
                            </button>
                            <button class="btn btn-warning float-left mr-2" value="submit" type="submit" id="submit">Dislike
                            </button>

                        </div>
                                <div class="float-right">
                                    Total Dislikes: {{ $answer->dislikes()->count() }}
                                </div>
                                <div class="float-right">
                                     &nbsp &nbsp
                                </div>
                                <div class="float-right">
                                    Total Likes: {{ $answer->likes()->count() }}
                                </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection