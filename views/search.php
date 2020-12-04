<?php

?>

<h2>Search results for <?php echo $search_term; ?></h2>


<script type="text/javascript">

$.ajax({
    url: "<?php echo API_STORE_URL; ?>products",
    method: "get",
    dataType: "json",
    data: {},
    success: function(response)
    {

    }
});

</script>
