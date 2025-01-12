@extends('layoutsAdmin.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الاقسام الرئيسية </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin/questions">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">  أسئلة امتحانية
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع الأسئلة الامتحانية  </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                <th>السؤال </th>
                                                <th> الخيار 1</th>
                                                <th>الخيار 2 </th>
                                                <th>الخيار 3 </th>
                                                <th>الخيار 4 </th>
                                                <th>الخيار 5 </th>
                                                <th>الإجابة</th>
                                                <th> الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($question)
                                            @foreach($question as $ques)
                                                    <tr>
                                                        <td>{{$ques -> question}}</td>
                                                        <td>{{$ques -> option1}}</td>
                                                        <td>{{$ques -> option2}}</td>
                                                        <td>{{$ques -> option3}}</td>
                                                        <td>{{$ques -> option4}}</td>
                                                        <td>{{$ques -> option5}}</td>
                                                        <td>{{$ques -> answer}}</td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                 
                                                                <a href="{{route('admin.questions.edit',$ques->id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>

                                                                <a href="{{route('admin.questions.show',$ques->id)}}"
                                                                    class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">عرض</a>
                                                                    <form action="{{route('admin.questions.destroy',['question'=>$ques->id])}}" method="post">
                                                                     @csrf
                                                                     @method('delete')
                                                                    <input type="submit" value="delete">
                                                                    </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
