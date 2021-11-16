<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>GRE Dictionary</title>
    <style>
        .search-box {
            height: 150px;
        }

        .input-box input {
            width: 400px;
            height: 38px;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid black;
        }

        .answer-box {
            width: 500px;
            height: 90px;
            margin: 50px auto;
            background-color: blue;
        }
    </style>
</head>

<body id="top">

    <div class="container-lg">
        <div class="mt-4 p-5 bg-dark text-white rounded">
            <h1>GRE Dictionary</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Word List
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-black" id="exampleModalLabel">Word List</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-dark">
                            <p>Abate,Aberrant, Abeyance, Abscond, Abstemious, Admonish, Adulterate, Aesthetic,
                                Aggregate, Alacrity,
                                Alleviate, Amalgamate, Ambiguous, Ambivalence, Ameliorate, Anachronism, Analogous,
                                Anarchy, Anomalous,
                                Antipathy, Apathy, Appease, Apprise, Approbation, Appropriate, Arduous, Artless,
                                Ascetic, Assiduous,
                                Assuage, Attenuate, Audacious, Austere, Autonomous, Aver, Banal, Belie, Beneficent,
                                Bolster, Bombastic,
                                Boorish, Burgeon, Burnish, Buttress, Capricious, Castigation, Catalyst, Caustic,
                                Chicanery, Coagulate,
                                Coda, Cogent, Commensurate, Compendium, Complaisant, Compliant, Conciliatory, Condone,
                                Confound, Connoisseur,
                                Contention, Contentious, Contrite, Conundrum, Converge, Convoluted, Craven, Daunt,
                                Decorum, Default, Deference,
                                Delineate, Denigrate, Deride, Derivative, Desiccate, Desultory, Deterrent, Diatribe,
                                Dichotomy, Diffidence, Diffuse,
                                Digression, Dirge, Disabuse, Discerning, Discordant, Discredit, Discrepancy, Discrete,
                                Disingenuous, Disinterested, Disjointed,
                                Dismiss, Disparage, Disparate, Dissemble, Disseminate, Dissolution, Dissonance, Distend,
                                Distill, Diverge, Divest, Document,
                                Dogmatic, Dormant, Dupe, Ebullient, Eclectic, Efficacy, Effrontery, Elegy, Elicit,
                                Embellish, Empirical, Emulate,
                                Endemic, Enervate, Engender, Enhance, Ephemeral, Equanimity, Equivocate, Erudite,
                                Esoteric, Eulogy, Euphemism, Exacerbate,
                                Exculpate, Exigency, Extrapolation, Facetious, Facilitate, Fallacious, Fatuous, Fawning,
                                Felicitous, Fervor,
                                Flag, Fledgling, Flout, Foment, Forestall, Frugality, Futile, Gainsay, Garrulous, Goad,
                                Gouge, Grandiloquent, Gregarious, Guileless, Gullible,
                                Harangue, Homogeneous, Hyperbole, Iconoclastic, Idolatry, Immutable, Impair, Impassive,
                                Impede, Impermeable, Imperturbable, Impervious, Implacable,
                                Implicit, Implode, Inadvertently, Inchoate, Incongruity, Inconsequential, Incorporate,
                                Indeterminate, Indigence, Indolent, Inert,
                                Ingenuous, Inherent, Innocuous, Insensible, Insinuate, Insipid, Insularity, Intractable,
                                Intransigence, Inundate,
                                Inured, Invective, Irascible, Irresolute, Itinerary, Laconic, Lassitude, Latent, Laud,
                                Lethargic, Levee, Levity, Log, Loquacious, Lucid, Luminous,
                                Magnanimity, Malingerer, Malleable, Maverick, Mendacious, Metamorphosis, Meticulous,
                                Misanthrope, Mitigate, Mollify, Morose, Mundane, Negate,
                                Neophyte, Obdurate, Obsequious, Obviate, Occlude, Officious, Onerous, Opprobrium,
                                Oscillate, Ostentatious, Paragon, Partisan,
                                Pathological, Paucity, Pedantic, Penchant, Penury, Perennial, Perfidious, Perfunctory,
                                Permeable,
                                Pervasive, Phlegmatic, Piety, Placate, Plasticity, Platitude, Plethora, Plummet, Porous,
                                Pragmatic, Preamble, Precarious, Precipitate,
                                Precursor, Presumptuous, Prevaricate, Pristine, Probity, Problematic, Prodigal,
                                Profound, Prohibitive, Proliferate, Propensity, Propitiate,
                                Propriety, Proscribe, Pungent, Qualified, Quibble, Quiescent, Rarefied, Recalcitrant,
                                Recant, Recluse,
                                Recondite, Refractory, Refute, Relegate, Reproach, Reprobate, Repudiate, Rescind,
                                Resolution, Resolve, Reticent, Reverent, Sage,
                                Salubrious, Sanction, Satiate, Saturate, Savor, Secrete, Shard, Skeptic, Solicitous,
                                Soporific, Specious, Spectrum, Sporadic,
                                Stigma, Stint, Stipulate, Stolid, Striated, Strut, Subpoena, Subside, Substantiate,
                                Supersede, Supposition, Tacit, Tangential, Tenuous, Tirade,
                                Torpor, Tortuous, Tractable, Transgression, Truculence, Vacillate, Venerate, Veracious,
                                Verbose, Viable, Viscous, Vituperative,
                                Volatile, Warranted, Wary, Welter, Whimsical, Zealot</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="mt-4 p-5 bg-light text-dark rounded input-box search-box">
                        <input class="input-control" type="text" placeholder="Type the word here..." name=""
                            id="input-word">
                        <button type="button" class="btn btn-primary" id="search-but">Search</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-4 p-5 bg-light text-dark rounded search-box">
                        <h3 id="translate"></h3>
                    </div>
                </div>
            </div>
        </div>




        </form>



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <script>
        const library = {
            "abate": "subside, or moderate",
            "aberrant": "abnormal, or deviant",
            "abeyance": "suspended action",
            "abscond": "depart secretly and hide",
            "abstemious": "sparing in eating and drinking; temperate",
            "admonish": "warn; reprove",
            "adulterate": "make impure by adding inferior or tainted substances",
            "aesthetic": "artistic; dealing with or capable of appreciating the beautiful",
            "aggregate": "gather; accumulate",
            "alacrity": "cheerful promptness; eagerness",
            "alleviate": "relieve",
            "amalgamate": "combine; unite in one body",
            "ambiguous": "unclear or doubtful in meaning",
            "ambivalence": "the state of having contradictory or conflicting emotionalattitudes",
            "ameliorate": "improve",
            "anachronism": "something or someone misplaced in time",
            "analogous": "comparable",
            "anarchy": "absence of governing body; state of disorder",
            "anomalous": "abnormal; irregular",
            "antipathy": "aversion; dislike",
            "apathy": "lack of caring; indifference",
            "appease": "pacify or soothe; relieve",
            "apprise": "inform",
            "approbation": "approval",
            "appropriate v.": "acquire; take possession of for one’s own use",
            "arduous": "hard; strenuous",
            "artless": "without guile; open and honest",
            "ascetic": "practicing self-denial; austere",
            "assiduous": "diligent",
            "assuage v.": "ease or lessen (pain); satisfy (hunger); soothe (anger)",
            "attenuate": "make thinner",
            "audacious": "daring; bold",
            "austere": "forbiddingly stern; severely simple and unornamented",
            "autonomous": "self-governing; independent",
            "aver": "assert confidently or declare; as used in law, state formally as a fact",
            "banal": "hackneyed; commonplace; trite; lacking originality",
            "belie": "contradict; give a false impression",
            "beneficen": "kindly; doing good",
            "bolster": "support; reinforce",
            "bombastic": "pompous; using inflated language",
            "boorish": "rude; insensitive",
            "burgeon": "grow forth; send out buds",
            "burnish": "make shiny by rubbing; polish",
            "buttress v.": "support; prop up",
            "capricious": "unpredictable; fickle",
            "castigation": "punishment; severe criticism",
            "catalyst": "agent that increases the pace of a chemical action",
            "caustic": "burning; sarcastically biting",
            "chicanery": "trickery; deception",
            "coagulate": "thicken; congeal; clot",
            "coda": "concluding section of a musical or literary composition; summarizes or concludes",
            "cogent": "convincing",
            "commensurate": "corresponding in extent, degree, etc.; proportionate",
            "compendium": "brief, comprehensive summary",
            "complaisant": "trying to please; overly polite; obliging",
            "compliant": "yielding; conforming to requirements",
            "conciliatory": "reconciling; soothing",
            "condone": "overlook; forgive; give tacit approval; excuse",
            "confound": "confuse; puzzle",
            "connoisseur": "person competent to act as a judge of art; a lover of art",
            "contention": "claim; thesis",
            "contentious": "quarrelsome",
            "contrite": "penitent",
            "conundrum": "riddle; difficult problem",
            "converge": "approach; tend to meet; come together",
            "convoluted": "coiled around; involved; intricate",
            "craven": "cowardly",
            "daunt": "intimidate; frighten",
            "decorum": "propriety; orderliness and good taste in manners",
            "default": "failure to act",
            "deference": "courteous regard for another’s wishes",
            "delineate": "portray; depict; sketch",
            "denigrate": "blacken",
            "deride": "ridicule; make fun of",
            "derivative": "unoriginal; obtained from another source",
            "desiccate": "dry up",
            "desultory": "aimless; haphazard; digressing at random",
            "deterrent": "something that discourages; hindrance",
            "diatribe": "bitter scolding; invective",
            "dichotomy": "split; branching into two parts (especially contradictory ones)",
            "diffidence": "shyness",
            "diffuse": "wordy, rambling, spread out (like a gas)",
            "digression": "wandering away from the subject",
            "dirge": "lament with music",
            "disabuse": "correct a false impression; undeceive",
            "discerning": "mentally quick and observant; having insight",
            "discordant": "not harmonious; conflicting",
            "discredit": "defame; destroy confidence in; disbelieve",
            "discrepancy": "lack of consistency; difference",
            "discrete": "separate; unconnected; consisting of distinct parts",
            "disingenuous": "lacking genuine candor; insincere",
            "disinterested": "unprejudiced",
            "disjointed": "lacking coherence; separated at the joints",
            "dismiss": "eliminate from consideration; reject",
            "disparage": "belittle",
            "disparate": "basically different; unrelated",
            "dissemble v.": "disguise; pretend",
            "disseminate": "distribute; spread; scatter (like seeds)",
            "dissonance": "discord; opposite of harmony",
            "distend": "expand; swell out",
            "diverge": "vary; go in different directions from the same point",
            "divest": "strip; deprive",
            "document": "provide written evidence",
            "dogmatic": "opinionated; arbitrary; doctrinal",
            "dormant": "sleeping; lethargic; latent",
            "dupe": "someone easily fooled",
            "ebullient": "showing excitement; overflowing with enthusiasm",
            "eclectic": "selective; composed of elements drawn from disparate sources",
            "efficacy": "power to produce desired effect",
            "effrontery": "impudence; shameless boldness; sheer nerve; presumptuousness",
            "elegy": "poem or song expressing lamentation",
            "elicit": "draw out by discussion",
            "embellish": "adorn; ornament; enhance, as a story",
            "empirical": "based on experience",
            "emulate": "imitate; rival",
            "endemic": "prevailing among a specific group of people or in a specific area or country",
            "enervate": "weaken",
            "engender": "cause; produce",
            "enhance": "increase; improve",
            "ephemeral": "short-lived; fleeting",
            "equanimity": "calmness of temperament; composure",
            "equivocate": "lie; mislead; attempt to conceal the truth",
            "erudite": "learned; scholarly",
            "esoteric": "hard to understand; known only to the chosen few",
            "eulogy": "expression of praise, often on the occasion of someone’s death",
            "euphemism": "mild expression in place of an unpleasant one",
            "exacerbate": "worsen; embitter",
            "exculpate": "clear from blame",
            "exigency": "urgent situation; pressing needs or demands; state of requiring immediate attention",
            "extrapolation": "projection; conjecture",
            "facetious": "joking (often inappropriately); humorous",
            "facilitate": "help bring about; make less difficult",
            "fallacious": "false; misleading",
            "fatuous": "brainless; inane; foolish, yet smug",
            "fawning": "trying to please by behaving obsequiously, flattering, or cringing",
            "felicitous": "apt; suitably expressed; well chosen",
            "fervor": "glowing ardor; intensity of feeling",
            "flag": "droop; grow feeble",
            "fledgling": "inexperienced",
            "flout": "reject; mock; show contempt for",
            "foment": "stir up; instigate",
            "forestall": "prevent by taking action in advance",
            "frugality": "thrift; economy",
            "futile": "useless; hopeless; ineffectual",
            "gainsay": "deny",
            "garrulous": "loquacious; talkative; wordy",
            "goad": "urge on",
            "gouge": "overcharge",
            "grandiloquent": "pompous; bombastic; using high-sounding language",
            "gregarious": "sociable",
            "guileless": "without deceit",
            "gullible": "easily deceived",
            "harangue": "long, passionate, and vehement speech",
            "homogeneous": "of the same kind",
            "hyperbole": "exaggeration; overstatement",
            "iconoclastic": "attacking cherished traditions",
            "idolatry": "worship of idols; excessive admiration",
            "immutable": "unchangeable",
            "impair": "injure; hurt",
            "impassive": "without feeling; imperturbable; stoical",
            "impede": "hinder; block",
            "impermeable": "impervious; not permitting passage through its substance",
            "imperturbable": "calm; placid",
            "impervious": "impenetrable; incapable of being damaged or distressed",
            "implacable": "incapable of being pacified",
            "implicit": "understood but not stated",
            "implode": "burst inward",
            "inadvertently": "unintentionally; by oversight; carelessly",
            "inchoate": "recently begun; rudimentary; elementary",
            "incongruity": "lack of harmony; absurdity",
            "inconsequential": "insignificant; unimportant",
            "incorporate": "introduce something into a larger whole; combine; unite",
            "indeterminate": "uncertain; not clearly fixed; indefinite",
            "indigence": "poverty",
            "indolent": "lazy",
            "inert": "inactive; lacking power to move",
            "ingenuous": "naive and trusting; young; unsophisticated",
            "inherent": "firmly established by nature or habit",
            "innocuous": "harmless",
            "insensible": "unconscious; unresponsive",
            "insinuate": "hint; imply; creep in",
            "insipid": "lacking in flavor; dull",
            "insularity": "narrow-mindedness; isolation",
            "intractable": "unruly; stubborn; unyielding",
            "intransigence n.": "efusal of any compromise; stubbornness",
            "inundate": "overwhelm; flood; submerge",
            "inured": "accustomed; hardened",
            "invective": "abuse",
            "irascible": "irritable; easily angered",
            "irresolute": "uncertain how to act; weak",
            "itinerary": "plan of a trip",
            "laconic": "brief and to the point",
            "lassitude": "languor; weariness",
            "latent": "potential but undeveloped; dormant; hidden",
            "laud": "praise",
            "lethargic": "drowsy; dull",
            "levee": "stone embankment to prevent flooding",
            "levity": "lack of seriousness or steadiness; frivolity",
            "log": "record of a voyage or flight; record of day-to-day activities",
            "loquacious": "talkative",
            "lucid": "easily understood; clear; intelligible",
            "luminous": "shining; issuing light",
            "magnanimity": "generosity",
            "malingerer": "one who feigns illness to escape duty",
            "malleable": "capable of being shaped by pounding; impressionable",
            "maverick": "rebel; nonconformist",
            "mendacious": "lying; habitually dishonest",
            "metamorphosis": "change of form",
            "meticulous": "excessively careful; painstaking; scrupulous",
            "misanthrope": "one who hates mankind",
            "mitigate": "appease; moderate",
            "mollify": "soothe",
            "morose": "ill-humored; sullen; melancholy",
            "mundane": "worldly as opposed to spiritual; everyday",
            "negate": "cancel out; nullify; deny",
            "neophyte": "recent convert; beginner",
            "obdurate": "stubborn",
            "obsequious": "lavishly attentive; servile; sycophantic",
            "obviate": "make unnecessary; get rid of",
            "occlude": "shut; close",
            "officious": " meddlesome; excessively pushy in offering one’s services",
            "onerous": "burdensome",
            "opprobrium": "infamy; vilification",
            "oscillate": "vibrate; waver",
            "ostentatious": "showy; pretentious; trying to attract attention",
            "paragon": "model of perfection",
            "partisan": "one-sided; prejudiced; committed to a party",
            "pathological": "pertaining to disease",
            "paucity": "scarcity",
            "pedantic": "showing off learning; bookish",
            "penchant": "strong inclination; liking",
            "penury": "severe poverty; stinginess",
            "perennial": "something long-lasting",
            "perfidious": "treacherous; disloyal",
            "perfunctory": "superficial; not thorough; lacking interest, care, or enthusiasm",
            "permeable": "penetrable; porous; allowing liquids or gas to pass through",
            "pervasive": "spread throughout",
            "phlegmatic": "calm; not easily disturbed",
            "piety": "devoutness; reverence for god",
            "placate": "pacify; conciliate",
            "plasticity": "ability to be molded",
            "platitude": "trite remark; commonplace statement",
            "plethora": "excess; overabundance",
            "plummet": "fall sharply",
            "porous": "full of pores; like a sieve",
            "pragmatic": "practical (as opposed to idealistic); concerned with the",
            "practical": "worth or impact of something",
            "preamble": "introductory statement",
            "precarious": "uncertain; risky",
            "precipitate": "rash, premature, hasty, sudden",
            "precursor": "forerunner",
            "presumptuous": "arrogant; taking liberties",
            "prevaricate": "lie",
            "pristine": "characteristic of earlier times; primitive; unspoiled",
            "probity": "uprightness; incorruptibility",
            "problematic": "doubtful; unsettled; questionable; perplexing",
            "prodigal": "wasteful; reckless with money",
            "profound": "deep; not superficial; complete",
            "prohibitive": "tending to prevent the purchase or use of something; inclined; to prevent or forbid",
            "proliferate": "grow rapidly; spread; multiply",
            "propensity": "natural inclination",
            "propitiate": "appease",
            "propriety": "fitness; correct conduct",
            "proscribe": "ostracize; banish; outlaw",
            "pungent": "stinging; sharp in taste or smell; caustic",
            "qualified": "limited; restricted",
            "quibble": "minor objection or complaint",
            "quiescent": "at rest; dormant; temporarily inactive",
            "rarefied": "made less dense (of a gas)",
            "recalcitrant": "obstinately stubborn; determined to resist authority; unruly",
            "recant": "disclaim or disavow; retract a previous statement; openly confess, error",
            "recluse": "hermit; loner",
            "recondite": "abstruse; profound; secret",
            "refractory": "stubborn; unmanageable",
            "refute": "disprove",
            "relegate": "banish to an inferior position; delegate; assign",
            "reproach": "express disapproval or disappointment",
            "reprobate": "person hardened in sin; devoid of a sense of decency",
            "repudiate": "disown; disavow",
            "rescind": "cancel",
            "resolution": "determination",
            "resolve": "determination; firmness of purpose",
            "reticent": "reserved; uncommunicative; inclined to silence",
            "reverent": "respectful; worshipful",
            "sage": "person celebrated for wisdom",
            "salubrious": "healthful",
            "sanction": "approve; ratify",
            "satiate": "satisfy fully",
            "saturate": "soak thoroughly",
            "savor": "enjoy; have a distinctive flavor, smell, or quality",
            "secrete": "hide away or cache; produce and release a substance into an organism",
            "shard": "fragment, generally of pottery",
            "skeptic": "doubter; person who suspends judgment until having",
            "examined": "evidence supporting a point of view",
            "solicitous": "worried; concerned",
            "soporific": "sleep-causing; marked by sleepiness",
            "specious": "seemingly reasonable but incorrect; misleading (often intentionally)",
            "spectrum": "colored band produced when a beam of light passes through a prism ",
            "sporadic": "occurring irregularly",
            "stigma": "token of disgrace; brand",
            "stint v.": "be thrifty; set limits",
            "stipulate": "make express conditions; specify",
            "stolid ": "dull; impassive",
            "striated": "marked with parallel bands; grooved",
            "strut": "pompous walk",
            "strut": "supporting bar",
            "subpoena": "writ summoning a witness to appear",
            "subside": "settle down; descend; grow quiet",
            "substantiate": "establish by evidence; verify; support",
            "supersede": "cause to be set aside; replace; make obsolete",
            "supposition": "hypothesis; surmise",
            "tacit": "understood; not put into words",
            "tangential": "peripheral; only slightly connected; digressing",
            "tenuous": "thin; rare; slim",
            "tirade": "extended scolding; denunciation; harangue",
            "torpor": "lethargy; sluggishness; dormancy",
            "tortuous": "winding; full of curves",
            "tractable": "docile; easily managed",
            "transgression": "violation of a law; sin",
            "truculence": "aggressiveness; ferocity",
            "vacillate": "waver; fluctuate",
            "venerate": "revere",
            "veracious": "truthful",
            "verbose": "wordy",
            "viable": "practical or workable",
            "viscous": "sticky, gluey",
            "vituperative": "adj abusive; scolding",
            "volatile": "changeable; explosive; evaporation rapidly",
            "warranted": "justified; authorized",
            "wary": "very cautious",
            "welter": "turmoil; bewildering jumble",
            "whimsical": "capricious; fanciful",
            "zealot": "fanatic; person who shows excessive zeal"
        }




        var kata = document.querySelector("#input-word")
        var tombol = document.querySelector("#search-but")
        var hasil = document.querySelector("#translate")
        tombol.addEventListener("click", translator)

        function translator() {
            hasil.innerText = library[kata.value.toLowerCase()]
        }
    </script>
</body>

</html>
