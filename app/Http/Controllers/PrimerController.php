<?phpnamespaceApp\Http\Controllers;

useIlluminate\Http\Request;

classPrimerControllerextendsController{
    publicfunction index()
    {
        returnview('mis-views.primer-view', [
            'texto' => 'Hola Mundo'
        ]);
    }

    publicfunction mostrarTexto($texto)
    {
        returnview('mis-views.primer-view', [
            'texto' => $texto
        ]);
    }
}
