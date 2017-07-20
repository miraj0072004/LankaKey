
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
</script> <!-- jquery cdn-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script><!--bootstrap js cdn-->

<script
  src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"
  
  crossorigin="anonymous">
</script> <!-- datatable js cdn-->
<script>
   $(document).ready(function() {
    $('#pages_table').DataTable();
       
       
    $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));        
  });
   
} );
</script>
</div>
</section>