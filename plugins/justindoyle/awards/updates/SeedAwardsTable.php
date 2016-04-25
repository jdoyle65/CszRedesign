<?php namespace JustinDoyle\Awards\Updates;

use Seeder;
use JustinDoyle\Awards\Models\Award;

class SeedAwardsTable extends Seeder {

    public function run()
    {
        Award::create([
            'name' => 'Public Awareness Award',
            'name_fr' => 'Prix de la presse',
            'url' => 'public-awareness',
            'eligibility' => 'Anyone',
            'eligibility_fr' => 'Tout le monde',
            'objective' => 'Recognizes author of an article published in the public press about zoology',
            'objective_fr' => 'Ce prix vise à encourager et à promouvoir l\'implication des membres de la SCZ à la sensibilisation du public à des sujets d\'intérêt pour la zoologie en écrivant des articles de vulgarisation publiés dans la presse populaire sur des sujets touchant l\'environnement, la biologie ou la zoologie.',
            'value' => 'Scroll; $100',
            'value_fr' => 'Certificat; 100$',
            'deadline' => 'October 1',
            'deadline_fr' => '1er octobre',
            'anyone' => 1,
            'phd' => 0,
            'pdf' => 0,
            'student' => 0
        ]);
        Award::create([
            'name' => 'Public Education Award',
            'name_fr' => 'Prix de la vulgarisation scientifique',
            'url' => 'public-education',
            'eligibility' => 'Anyone',
            'eligibility_fr' => 'Tout le monde',
            'objective' => 'Recognizes excellence in public education about zoology',
            'objective_fr' => 'Ce prix vise à reconnaître l\'excellence en vulgarisation scientifique dans le domaine de la zoologie.',
            'value' => 'Scroll; $300',
            'value_fr' => 'Certificat; 300$',
            'deadline' => 'October 1',
            'deadline_fr' => '1er octobre',
            'anyone' => 1,
            'phd' => 0,
            'pdf' => 0,
            'student' => 0
        ]);
        Award::create([
            'name' => 'Distinguished Medal Service',
            'name_fr' => 'Médaille de distinction',
            'url' => 'distinguished-medal',
            'eligibility' => 'Anyone',
            'eligibility_fr' => 'Tout le monde',
            'objective' => 'Recognizes service to the CSZ',
            'objective_fr' => 'Compte tenu de la reconnaissance du service à la SCZ.',
            'value' => 'Medal',
            'value_fr' => 'Médaille',
            'deadline' => '1 mo before December Council meeting',
            'deadline_fr' => '1 mois en avance à la réunion de décembre',
            'anyone' => 1,
            'phd' => 0,
            'pdf' => 0,
            'student' => 0
        ]);
        Award::create([
            'name' => 'FEJ Fry Award',
            'name_fr' => 'Médaille FEJ Fry',
            'url' => 'fej-fry',
            'eligibility' => 'PhD',
            'eligibility_fr' => 'PhD',
            'objective' => 'Recognizes an outstanding contribution to zoology',
            'objective_fr' => 'Décernée à un zoologiste canadien qui s\'est distingué par son apport aux connaissances et à la compréhension des phénomènes biologiques d\'intérêt pour la zoologie.',
            'value' => 'Medal; presents “Fry Lecture”; travel costs',
            'value_fr' => 'Médaille; le récipiendaire présente la conférence “Fry”; frais de voyage.',
            'deadline' => 'Mid-November',
            'deadline_fr' => 'mi-novembre',
            'anyone' => 0,
            'phd' => 1,
            'pdf' => 0,
            'student' => 0
        ]);
        Award::create([
            'name' => 'RA Wardle Award',
            'name_fr' => 'Prix RA Wardle',
            'url' => 'ra-wardle',
            'eligibility' => 'PhD',
            'eligibility_fr' => 'PhD',
            'objective' => 'Recognizes an outstanding contribution to parasitology.',
            'objective_fr' => 'Décerné par la Section de PIE et souligne une contribution remarquable dans le domaine de la parasitologie au Canada.',
            'value' => 'Scroll, medal; presents “Wardle Lecture”; travel costs to $200',
            'value_fr' => 'Certificat; médaille; le récipiendaire présente la conférence “Wardle”; frais de voyage jusqu\'à 200$',
            'deadline' => 'Mid-November',
            'deadline_fr' => 'mi-novembre',
            'anyone' => 0,
            'phd' => 1,
            'pdf' => 0,
            'student' => 0
        ]);
        Award::create([
            'name' => 'RG Boutilier New Investigator Award',
            'name_fr' => 'Prix RG Boutilier',
            'url' => 'rg-boutilier',
            'eligibility' => 'PhD',
            'eligibility_fr' => 'PhD',
            'objective' => 'Awarded to an outstanding CSZ member within 7 years of their first academic appointment.',
            'objective_fr' => 'Vise à encourager et à reconnaître des membres de la SCZ qui ont contribué de manière significative au domaine de la zoologie au cours des cinq premières années de leur premier emploi académique.',
            'value' => 'Scroll; presents “Boutilier Lecture”; travel costs to $1000',
            'value_fr' => 'Certificat; le récipiendaire présente la conférence “Boutilier”; frais de voyage jusqu\'à 1000$',
            'deadline' => 'October 1',
            'deadline_fr' => '1er octobre',
            'anyone' => 0,
            'phd' => 1,
            'pdf' => 0,
            'student' => 0
        ]);
        Award::create([
            'name' => 'TWM Cameron Outstanding Ph. D. Thesis Award',
            'name_fr' => 'Prix TWM Cameron',
            'url' => 'twm-cameron',
            'eligibility' => 'PhD',
            'eligibility_fr' => 'PhD',
            'objective' => 'Recognizes the author of an outstanding thesis submitted to a Canadian University',
            'objective_fr' => 'Pour récompenser l\'auteur d\'une thèse de doctorat en zoologie jugée exceptionnelle et soumise dans une université canadienne.',
            'value' => 'Scroll; presents “Cameron Lecture”; travel costs to $1500',
            'value_fr' => 'Certificat; le récipiendaire présente la conférence “Cameron”; frais de voyage jusqu\'à 1500$',
            'deadline' => 'August 15',
            'deadline_fr' => '15 août',
            'anyone' => 0,
            'phd' => 1,
            'pdf' => 0,
            'student' => 0
        ]);
        Award::create([
            'name' => 'PDF Award',
            'name_fr' => 'Prix pour chercheur postdoctoral',
            'url' => 'pdf',
            'eligibility' => 'PDF',
            'eligibility_fr' => 'Postdoctoral',
            'objective' => 'Recognizes excellence in scientific research and communication by Post-Doctoral Fellows',
            'objective_fr' => 'Pour but d\'encourager et de souligner l\'excellence dans les travaux de recherche des chercheurs postdoctoraux et pour la présentation de leurs résultats.',
            'value' => 'Scroll; $500',
            'value_fr' => 'Certificat; 500$',
            'deadline' => 'Abstract submission deadline',
            'deadline_fr' => 'La date limite de soumission des résumés pour la réunion générale annuelle',
            'anyone' => 0,
            'phd' => 0,
            'pdf' => 1,
            'student' => 0
        ]);
        Award::create([
            'name' => 'CSZ Student/PDF Research Grant',
            'name_fr' => 'Subvention de recherche et de voyage',
            'url' => 'csz-student-pdf',
            'eligibility' => 'PDF/Student',
            'eligibility_fr' => 'Postdoctoral/Étudiant',
            'objective' => 'To defray costs incurred for travel/research',
            'objective_fr' => 'À aider des étudiants ou chercheurs post-doctoraux à défrayer les coûts inhérents à des visites de collaboration scientifique effectuées dans des laboratoires d\'accueil, instituts de recherche, stations ou sites d\'études de terrain afin d\'y poursuivre des recherches en zoologie.',
            'value' => 'Up to $500',
            'value_fr' => 'Jusqu\'à 500$',
            'deadline' => 'January 31',
            'deadline_fr' => '31 janvier',
            'anyone' => 0,
            'phd' => 0,
            'pdf' => 1,
            'student' => 1
        ]);
        Award::create([
            'name' => 'CPB Student/PDF Research Grant',
            'name_fr' => 'Subvention de recherche de section PBC',
            'url' => 'cpb-student-pdf',
            'eligibility' => 'PDF/Student',
            'eligibility_fr' => 'Postdoctoral/Étudiant',
            'objective' => 'To defray costs incurred for travel/research by CPB member',
            'objective_fr' => 'À aider des étudiants ou chercheurs post-doctoraux qui est membres de la section PBC à défrayer les coûts inhérents à des visites de collaboration scientifique effectuées dans des laboratoires d\'accueil, instituts de recherche, stations ou sites d\'études de terrain afin d\'y poursuivre des recherches en zoologie.',
            'value' => 'Up to $500',
            'value_fr' => 'Jusqu\'à 500$',
            'deadline' => 'January 31',
            'deadline_fr' => '31 janvier',
            'anyone' => 0,
            'phd' => 0,
            'pdf' => 1,
            'student' => 1
        ]);
        Award::create([
            'name' => 'CSZ Conference Travel Grants',
            'name_fr' => 'Bourse de voyage pour la réunion générale annuelle',
            'url' => 'csz-conference-travel',
            'eligibility' => 'PDF/Student',
            'eligibility_fr' => 'Postdoctoral/Étudiant',
            'objective' => 'Selected from among students/PDFs submitting abstracts to annual CSZ conference',
            'objective_fr' => 'Sélectionnés parmi les étudiants / PDFs qui soumettent des résumés à la conférence annuelle de la SCZ, pour fournir une assistance de voyage à la conférence.',
            'value' => 'Variable',
            'value_fr' => 'Variable',
            'deadline' => 'No application necessary',
            'deadline_fr' => 'Aucune demande n\'est nécessaire',
            'anyone' => 0,
            'phd' => 0,
            'pdf' => 1,
            'student' => 1
        ]);
        Award::create([
            'name' => 'L Margolis Scholarship',
            'name_fr' => 'La bourse L Margolis',
            'url' => 'l-margolis',
            'eligibility' => 'Student',
            'eligibility_fr' => 'Étudiant',
            'objective' => 'Scholarship for a graduate student in fisheries biology',
            'objective_fr' => 'Le concours est ouvert à tous les Canadiens qui sont inscrits à un programme d\'études supérieures en biologie des pêches dans une université canadienne au moment où la bourse est acceptée.',
            'value' => 'Scroll; $500',
            'value_fr' => 'Certificat; 500$',
            'deadline' => 'November 1',
            'deadline_fr' => '1er novembre',
            'anyone' => 0,
            'phd' => 0,
            'pdf' => 0,
            'student' => 1
        ]);
        Award::create([
            'name' => 'WS Hoar Award',
            'name_fr' => 'Prix WS Hoar',
            'url' => 'ws-hoar',
            'eligibility' => 'Student',
            'eligibility_fr' => 'Étudiant',
            'objective' => 'Best student oral presentation at CSZ AGM',
            'objective_fr' => 'Le prix est remis à l\'étudiant qui donne la meilleure présentation orale lors du congrès annuel de la Société.',
            'value' => 'Scroll; $500',
            'value_fr' => 'Certificat; 500$',
            'deadline' => 'Abstract submission deadline',
            'deadline_fr' => 'La date limite de soumission des résumés pour la réunion générale annuelle',
            'anyone' => 0,
            'phd' => 0,
            'pdf' => 0,
            'student' => 1
        ]);
        Award::create([
            'name' => 'HI Battle Award',
            'name_fr' => 'Prix HI Battle',
            'url' => 'hi-battle',
            'eligibility' => 'Student',
            'eligibility_fr' => 'Étudiant',
            'objective' => 'Best student poster at CSZ AGM',
            'objective_fr' => 'Le prix est remis à l\'étudiant qui donne la meilleure affiche lors du congrès annuel de la Société.',
            'value' => 'Scroll; $500',
            'value_fr' => 'Certificat; $500',
            'deadline' => 'Abstract submission deadline',
            'deadline_fr' => 'La date limite de soumission des résumés pour la réunion générale annuelle',
            'anyone' => 0,
            'phd' => 0,
            'pdf' => 0,
            'student' => 1
        ]);
        Award::create([
            'name' => 'BK Hall Award (CMD)',
            'name_fr' => 'Prix BK Hall (MDC)',
            'url' => 'bk-hall',
            'eligibility' => 'Student',
            'eligibility_fr' => 'Étudiant',
            'objective' => 'Best student oral presentation in the CMD section at the AGM',
            'objective_fr' => 'Le prix est remis à l\'étudiant de la section MDC qui donne la meilleure présentation orale lors du congrès annuel de la Société.',
            'value' => 'Scroll; $400',
            'value_fr' => 'Certificat; $400',
            'deadline' => 'Abstract submission deadline',
            'deadline_fr' => 'La date limite de soumission des résumés pour la réunion générale annuelle',
            'anyone' => 0,
            'phd' => 0,
            'pdf' => 0,
            'student' => 1
        ]);
        Award::create([
            'name' => 'GF Holeton Award (CPB)',
            'name_fr' => 'Prix GF Holeton (PBC)',
            'url' => 'gf-holeton',
            'eligibility' => 'Student',
            'eligibility_fr' => 'Étudiant',
            'objective' => 'Best student poster presentation in the CPB section at the AGM',
            'objective_fr' => 'Le prix est remis à l\'étudiant de la section PBC qui donne la meilleure affiche lors du congrès annuel de la Société.',
            'value' => 'Scroll; $400',
            'value_fr' => 'Certificat; $400',
            'deadline' => 'Abstract submission deadline',
            'deadline_fr' => 'La date limite de soumission des résumés pour la réunion générale annuelle',
            'anyone' => 0,
            'phd' => 0,
            'pdf' => 0,
            'student' => 1
        ]);
        Award::create([
            'name' => 'CC Lindsey award (EEE)',
            'name_fr' => 'Prix CC Lindsey (ÉÉÉ)',
            'url' => 'cc-lindsey',
            'eligibility' => 'Student',
            'eligibility_fr' => 'Étudiant',
            'objective' => 'Best student presentation (oral or poster) in the EEE section at the AGM',
            'objective_fr' => 'Le prix est remis à l\'étudiant de la section ÉÉÉ qui donne la meilleure présentation (orale ou par l\'affiche) lors du congrès annuel de la Société.',
            'value' => 'Scroll; $300',
            'value_fr' => 'Certificat; $300',
            'deadline' => 'March 31',
            'deadline_fr' => '31 mars',
            'anyone' => 0,
            'phd' => 0,
            'pdf' => 0,
            'student' => 1
        ]);
        Award::create([
            'name' => 'AM Fallis Award (PIE)',
            'name_fr' => 'Prix AM Fallis (PIE)',
            'url' => 'am-fallis',
            'eligibility' => 'Student',
            'eligibility_fr' => 'Étudiant',
            'objective' => 'Best student oral presentation in the PIE section at the AGM',
            'objective_fr' => 'Le prix est remis à l\'étudiant de la section PIE qui donne la meilleure présentation orale lors du congrès annuel de la Société.',
            'value' => 'Scroll; $300',
            'value_fr' => 'Certificat; 300$',
            'deadline' => 'Abstract submission deadline',
            'deadline_fr' => 'La date limite de soumission des résumés pour la réunion générale annuelle',
            'anyone' => 0,
            'phd' => 0,
            'pdf' => 0,
            'student' => 1
        ]);
    }
}