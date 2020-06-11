<div class="form-group">
    <div class="col">
        <label for="training_group">Группа</label>
        <input type="text" class="form-control @error('training_group') is-invalid @enderror" id="training_group" name="training_group"
        value="{{  $item->training_group ?? old('training_group') }}">
        @error('training_group')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col">
        <label for="year">Год</label>
        <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year"
            value="{{  $item->year ?? old('year') }}">
        @error('year')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col">
        <label for="topic">Тема</label>
        <input type="text" class="form-control @error('topic') is-invalid @enderror" id="topic" name="topic"
            value="{{  $item->topic ?? old('topic') }}">
        @error('topic')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col">
        <label for="mark">Оценка</label>
        <input type="number" class="form-control @error('mark') is-invalid @enderror" id="mark" name="mark"
            value="{{  $item->mark ?? old('mark') }}">
        @error('mark')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col">
        <label for="full_name_student">Фио студента</label>
        <input type="text" class="form-control @error('full_name_student') is-invalid @enderror" id="full_name_student" name="full_name_student"
            value="{{  $item->full_name_student ?? old('full_name_student') }}">
        @error('full_name_student')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col">
        <label for="full_name_teacher">Фио научного руководителя</label>
        <input type="text" class="form-control @error('full_name_teacher') is-invalid @enderror" id="full_name_teacher" name="full_name_teacher"
            value="{{  $item->full_name_teacher ?? old('full_name_teacher') }}">
        @error('full_name_teacher')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <br>
<div class="row justify-content-center">
    <button type="submit" class="col-3 btn btn-primary">Сохранить</button>
</div>
<script type="application/javascript">
    // // Валидация года окончания учебного заведения (год в формате '2019')
    // $.validator.addMethod( "year", function( value, element ) {
    //     return this.optional( element ) || /^\d{4}$/.test( value );
    // }, "Пожалуйста, введите год в формате '2019'." );

    $('form').validate({
            rules: {
                training_group: {
                    required: true,
                    maxlength: 255
                },
                year: {
                    required: true,
                    year: true,
                },
                topic: {
                    required: true,
                    maxlength: 255
                },
                mark: {
                    integer: true,
                    min: 3,
                    min: 5
                },
                full_name_student: {
                    required: true,
                    maxlength: 255
                },
                full_name_teacher: {
                    required: true,
                    maxlength: 255
                },
            }
        });
    </script>
