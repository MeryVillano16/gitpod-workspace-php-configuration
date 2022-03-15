# gitpod-workspace-php-configuration

GET RESTFUL API
1. php artisan migrate
    -providers\appserviceprovider
    - function
    -use
2. make controller: php artisan make:controller Contact/ContactController
3. creare route: api.php file (Route::get('contact', 'Contact\ContactController@contactAll');)
    go to controller create function public 
    create model: php artisan make:model ContactModel
    go to model created: 
    protected $table = "Contact"; //table name
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'email',
        'age',
        'salary',
        'address',
    ];
    go to controller: use App\Http\Controllers\Controller;
     and this inside function  return response()->json(ContactModel::get(), 200);
