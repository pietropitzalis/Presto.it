<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Became a Revisor of PRESTO.IT</title>
</head>
<body>
    <h1>Ciao {{$contact['user']}}, ti confermiamo che abbiamo ricevuto la tua richiesta per diventare un revisore,se il tuo profilo sarà in linea con la ricerca ti ricontatteremo al più presto!</h1>
    <p>Grazie per averci scelto</p>
    <p>Il Team di Presto.it</p>

    <div>
        <ul>
           <p>Riepilogo Dati</p>
            <li>
                Nome Utente: {{$contact['user']}}
            </li>
            <li>
                Messaggio di info: {{$contact['message']}}
            </li>
        </ul>
    </div>
</body>
</html>