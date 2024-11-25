<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = fillat@palettes-distribution.com; // Remplacez par votre email
    $subject = "Réponses au Questionnaire - Palettes Distribution";

    $message = "Bonjour,\n\nVoici les réponses soumises au questionnaire :\n\n";
    $message .= "1. Lors du choix d’un fournisseur, quels sont les trois éléments les plus importants pour vous ?\n";
    $message .= "   - Réponse : " . htmlspecialchars($_POST['q1']) . "\n\n";

    $message .= "2. Avant de collaborer avec une entreprise, quelles informations recherchez-vous généralement ?\n";
    $message .= "   - Réponse : " . htmlspecialchars($_POST['q2']) . "\n\n";

    $message .= "3. Lorsqu’il s’agit de travailler avec un nouveau fournisseur, qu’est-ce qui vous aide à prendre votre décision ?\n";
    $message .= "   - Réponse : " . htmlspecialchars($_POST['q3']) . "\n\n";

    $message .= "4. Pour vous, qu’est-ce qui reflète la fiabilité et le professionnalisme d’une entreprise ?\n";
    $message .= "   - Réponse : " . htmlspecialchars($_POST['q4']) . "\n\n"; 

    $message .= "5. Quel poids accordez-vous à ces aspects dans votre confiance envers une entreprise ?\n";
    $message .= "   - Respect des délais de livraison : " . htmlspecialchars($_POST['q5a']) . "\n";
    $message .= "   - Engagement écologique : " . htmlspecialchars($_POST['q5b']) . "\n";
    $message .= "   - Clarté des informations commerciales : " . htmlspecialchars($_POST['q5c']) . "\n\n";

    $message .= "6. Qu’attendez-vous d’un échange avec notre équipe commerciale ?\n";
    $message .= "   - Réponse : " . htmlspecialchars($_POST['q6']) . "\n\n";

    $message .= "7. Les avis ou témoignages de nos clients influencent-ils votre perception ?\n";
    $message .= "   - Réponse : " . htmlspecialchars($_POST['q7']) . "\n\n";

    $message .= "8. Selon vous, qu’est-ce qui manque souvent chez les fournisseurs pour instaurer une vraie relation de confiance ?\n";
    $message .= "   - Réponse : " . htmlspecialchars($_POST['q8']) . "\n\n";

    $message .= "Cordialement,\nL'équipe PALETTES DISTRIBUTION";

    $headers = "From: no-reply@votre-domaine.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
