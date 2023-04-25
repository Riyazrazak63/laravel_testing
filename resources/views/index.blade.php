<select id="categories" class="form-select">
    <option value="">Select category</option>
    <option value="1">Category 1</option>
    <option value="2">Category 2</option>
</select>

<select id="subcategories" class="form-select">
    <option value="">Select subcategory</option>
</select>

<style>
    .form-select {
        margin-bottom: 1rem;
        padding: .5rem 1rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        border: 1px solid #ced4da;
        border-radius: .25rem;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(function () {
        $('#categories').on('change', function () {
            var categoryId = $(this).val();
            if (categoryId) {
                getSubcategories(categoryId);
            } else {
                $('#subcategories').empty();
            }
        });

        $('#subcategories').on('change', function () {
            var subcategoryId = $(this).val();
            if (subcategoryId) {
                getSubcategories(subcategoryId);
            }
        });

        function getSubcategories(id) {
            $.ajax({
                url: '/categories/' + id + '/subcategories',
                type: 'GET',
                success: function (response) {
                    $('#subcategories').empty();
                    $.each(response.subcategories, function (key, subcategory) {
                        $('#subcategories').append($('<option>', {
                            value: subcategory.id,
                            text: subcategory.name
                        }));
                    });
                }
            });
        }
    });
</script>