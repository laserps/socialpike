@extends('Member.layouts.app')

@section('cssbottom')
@endsection

@section('content')
    <div class="col-12 col-md-8">
        <div class="card mb-4">
            <form id='post'>
                <textarea class='form-control'></textarea>
                <div class="col-md-2 pull-right">
                    <button type='submit' class='btn btn-success'>post</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('jsbottom')
    <script>
        $("#post").validate({
            rules: {
                /*num_doc: "required",
                date_doc: "required",
                department_id: "required",
                user_recorder: "required",
                user_recipient: "required",*/
            },
            messages: {
                /*num_doc: "กรุณาระบุเลขที่เอกสาร",
                date_doc: "กรุณาระบุวันที่เอกสาร",
                department_id: "กรุณาเลือกแผนก",
                user_recorder: "กรุณาเลือกผู้บันทึก",
                user_recipient: "กรุณาเลือกผู้รับสินค้า",*/
            },
            errorElement: "span",
            errorPlacement: function ( error, element ) {
                error.addClass( "help-block" );
                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.parent( "label" ) );
                } else {
                    error.insertAfter( element );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).parents('.form-group').addClass( "has-error" ).removeClass( "has-success" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).parents('.form-group').addClass( "has-success" ).removeClass( "has-error" );
            },
            submitHandler: function(form){
                console.log(123);
                /*var btn = $(form).find('[type="submit"]');
                $.ajax({
                    method : "POST",
                    url : url+"/Stock/StockAccept/updateStockMaterial",
                    dataType : 'json',
                    data : $(form).serialize()
                }).done(function(rec){
                    if(rec.type == 'success'){
                        $('#infoModal').modal('hide');
                        swal({
                            confirmButtonText:'ตกลง',title: rec.title,text: rec.text,type: rec.type
                        }).then((rec) => {
                            if(rec) {
                                dataTableList.api().ajax.reload();
                                form.reset();
                                location.reload();
                            }
                        });
                    }else{
                        swal({
                            confirmButtonText:'ตกลง',title: rec.title,text: rec.text,type: rec.type
                        });
                    }
                });*/
            }
        });
    </script>
@endsection
