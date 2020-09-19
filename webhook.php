<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$senderId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$text = trim($text);
$text = strtolower($text);
header("Content-Type: application/json");
$response = '';
if(strpos($text, "/start") === 0 || $text=="capitano")
{
	$response = "......!";
}
elseif (strpos($text, "debole ") !== false)
{
	$response = "Non sei tu ad essere debole, sono io ad essere troppo forte per te!! ";
}
elseif (strpos($text, "semplice ") !== false)
{
	$response = "Non ricordo di aver detto che ti avrei ucciso perché sono uno Shinigami. Il motivo per cui ti sto uccidendo è semplice. È perché hai puntato la tua lama sul mio unico orgoglio.";
}
elseif (strpos($text, "raggiung") !== false)
{
	$response = "Lascia che ti parli della differenza tra te e me. È come la storia della scimmia che cerca di catturare la luna. Per quanto vicino pensi di essere alla luna, è ancora solo il riflesso della luna in mezzo al lago Non importa come ci si sforza di catturare quella 'luna', inevitabilmente affonderai sul fondo di quel lago senza alcun risultato. Non mi raggiungerai mai.";
}
elseif (strpos($text, "arrogante") !== false)
{
	$response = "Il fatto che ti consideri uguale a me, è essere arrogante in sé.";
}
if (strpos($text, "colpit") !== false) 
{
	$response = "Sii orgoglioso come qualcuno che, dopo essere stato colpito da questo potere, è ancora in grado di mantenere la forma di un corpo.";
}
elseif (strpos($text, "protegger") !== false)
{
	$response = "Ricorda che una spada impugnata da qualcuno che sta per morire ... non sarà mai in grado di proteggere nulla.";

}
elseif (strpos($text, "bankai") !== false)
{
	$response = "Metti via la tua spada e vivrai ... a meno che tu non stia ancora sognando di sconfiggermi. Hai dimenticato o non ti è mai venuto in mente ... che ho anche un Bankai?";

}
elseif (strpos($text, "scelta") !== false)
{
	$response = "Nessuna scelta, quindi. Prima di diventare intossicato dal tuo stesso potere, ti mostrerò un divario decisivo che non potresti superare in un millennio di lotte.";

}
elseif (strpos($text, "appoggio") !== false)
{
	$response = "L'arroganza distrugge i punti di appoggio della vittoria.";

}
elseif (strpos($text, "offes") !== false)
{
	$response = "Non importa quanto sia forte una difesa, un'offesa più forte la distruggerà sempre.";

}
elseif (strpos($text, "toccar") !== false)
{
	$response = "La tua lama non potrà mai toccarmi. Mai.!";
}
elseif (strpos($text, "controllo") !== false)
{
	$response = " Controllo ... dici? Quando sei davanti a me ... quella parola non ha alcun significato. Ban-Kai. Senbonzakura Kageyoshi.";
}
elseif (strpos($text, "emozion") !== false)
{
	$response = "Qualcosa di inutile come le emozioni, non ne ho mai avute tanto per cominciare";
}
elseif (strpos($text, "sparisc") !== false)
{
	$response = "Sparisci. La mia spada non esiste per schiacciare gli insetti come te.";
}
elseif (strpos($text, "regole") !== false)
{
	$response = "Il clan Kuchiki è una delle quattro case nobili. Dobbiamo stabilire lo standard per tutti gli Shinigami. Se non rispettiamo il codice ... chi lo sosterrà?";
}
elseif (strpos($text, "lento") !== false)
{
	$response = "Sei lento, anche quando cadi!";
}
elseif (strpos($text, "sipario") !== false)
{
	$response = "Il sipario che cade alla fine, sarà abbattuto dalla lama della mia spada.";
}
elseif (strpos($text, "sfrutt") !== false)
{
	$response = "Mi stai dicendo di sfruttare un'apertura per uno come te? Non parlare fuori dalla tua portata, ragazzo!";
}
elseif (strpos($text, "degno") !== false)
{
	$response = "Sei mille anni troppo giovane ... per pensare di essere degno di morire con il mio Bankai.";
}
elseif (strpos($text, "inchin") !== false)
{
	$response = "Non è possibile. Con la tua abilità, non puoi nemmeno far toccare a terra una delle mie ginocchia.";
}
elseif (strpos($text, "congrat") !== false)
{
	$response = "Ben fatto. Questa volta, la tua zanna mi ha decisamente toccato.";
}
elseif (strpos($text, "onorat") !== false)
{
	$response = "Mentre passi alla prossima vita, sentiti onorato di essere morto per mano del mio Bankai.";
}
elseif (strpos($text, "calpest") !== false)
{
	$response = "Vedo che ti piace calpestare il nostro orgoglio. Molto bene, allora. Inciderò nel tuo corpo ... La punizione per aver ferito il nostro orgoglio! ";
}
elseif (strpos($text, "spezzata") !== false)
{
	$response = "la mia spada è stata spezzata dalla tua libertà di spirito.";
}
elseif (strpos($text, "occasione") !== false)
{
	$response = " I miracoli accadono una volta sola. Non ti sarà concessa un'altra occasione, ragazzino.";
}
elseif (strpos($text, "piang") !== false)
{
	$response = "Non dobbiamo piangere, il pianto è la resa del corpo nei confronti del cuore, nient'altro che la prova che non siamo in grado di gestire ciò che chiamiamo cuore.";
}
elseif (strpos($text, "disturb") !== false)
{
	$response = "Indipendentemente da chi o cosa siano, chiunque disturba la Soul Society verrà abbattuto. ";
}
elseif (strpos($text, "insicur") !== false)
{
	$response = "La paura non nasce mai dal nulla. Nasce dalle piccole insicurezze che persistono nei nostri cuori.";
}
elseif (strpos($text, "byakuya") !== false)
{
	$response = "28 ° capo del clan Kuchiki , uno dei quattro grandi clan nobili della Soul Society. È anche il capitano della 6a divisione . agisce in modo aristocratico. Sembra sempre sereno e apatico nei confronti degli altri, anche se in realtà è profondamente in conflitto. È particolarmente calmo, anche in battaglia. In genere agisce indifferentemente, al limite dell'arroganza, per la maggior parte delle situazioni che deve affrontare e raramente vede il suo avversario come degno del suo tempo.";
}


$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);
