@section('jjs')
<script src="/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="/jquery-3.3.1.js" charset="utf-8"></script>
<script>
                    $(function(){
                        $('#admin').click(function(){
                            location.href="{{url('wareslistview')}}";
                        })
                    })
</script>
@show