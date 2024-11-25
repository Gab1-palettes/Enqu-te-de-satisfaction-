<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Adresse e-mail où les réponses seront envoyées
    $to = "fillat@palettes-distribution.com"; // Remplacez par votre e-mail
    $subject = "Réponses au Questionnaire - Palettes Distribution";

    // Début du message
    $message = "Bonjour,\n\nVoici les réponses soumises au questionnaire :\n\n";

    // Question 1 : Réponses multiples
    $message .= "1. Lors du choix d’un fournisseur, quels sont les trois éléments les plus importants pour vous ?\n";
    if (isset($_POST['q1'])) {
        $message .= "   - Réponse : " . implode(", ", $_POST['q1']) . "\n\n";
    } else {
        $message .= "   - Réponse : Aucune réponse\n\n";
    }

    // Question 2 : Réponses multiples
    $message .= "2. Avant de collaborer avec une entreprise, quelles informations recherchez-vous généralement ?\n";
    if (isset($_POST['q2'])) {
        $message .= "   - Réponse : " . implode(", ", $_POST['q2']) . "\n\n";
    } else {
        $message .= "   - Réponse : Aucune réponse\n\n";
    }

    // Question 3 : Réponses multiples
    $message .= "3. Lorsqu’il s’agit de travailler avec un nouveau fournisseur, qu’est-ce qui vous aide à prendre votre décision ?\n";
    if (isset($_POST['q3'])) {
        $message .= "   - Réponse : " . implode(", ", $_POST['q3']) . "\n\n";
    } else {
        $message .= "   - Réponse : Aucune réponse\n\n";
    }

    // Question 4 : Réponse unique (textarea)
    $message .= "4. Pour vous, qu’est-ce qui reflète la fiabilité et le professionnalisme d’une entreprise ?\n";
    $message .= "   - Réponse : " . htmlspecialchars($_POST['q4'] ?? "Aucune réponse") . "\n\n";

    // Question 5 : Réponses uniques (radio)
    $message .= "5. Quel poids accordez-vous à ces aspects dans votre confiance envers une entreprise ?\n";
    $message .= "   - Respect des délais de livraison : " . htmlspecialchars($_POST['q5a'] ?? "Aucune réponse") . "\n";
    $message .= "   - Engagement écologique : " . htmlspecialchars($_POST['q5b'] ?? "Aucune réponse") . "\n";
    $message .= "   - Clarté des informations commerciales : " . htmlspecialchars($_POST['q5c'] ?? "Aucune réponse") . "\n\n";

    // Question 6 : Réponses multiples
    $message .= "6. Qu’attendez-vous d’un échange avec notre équipe commerciale ?\n";
    if (isset($_POST['q6'])) {
        $message .= "   - Réponse : " . implode(", ", $_POST['q6']) . "\n\n";
    } else {
        $message .= "   - Réponse : Aucune réponse\n\n";
    }

    // Question 7 : Réponse unique (radio)
    $message .= "7. Les avis ou témoignages de nos clients influencent-ils votre perception ?\n";
    $message .= "   - Réponse : " . htmlspecialchars($_POST['q7'] ?? "Aucune réponse") . "\n\n";

    // Question 8 : Réponse unique (textarea)
    $message .= "8. Selon vous, qu’est-ce qui manque souvent chez les fournisseurs pour instaurer une vraie relation de confiance ?\n";
    $message .= "   - Réponse : " . htmlspecialchars($_POST['q8'] ?? "Aucune réponse") . "\n\n";

    // Signature
    $message .= "Cordialement,\nL'équipe PALETTES DISTRIBUTION";

    // En-têtes
    $headers = "From: no-reply@palettes-distribution.com\r\n"; // Remplacez par votre domaine
    $headers .= "Reply-To: no-reply@palettes-distribution.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
