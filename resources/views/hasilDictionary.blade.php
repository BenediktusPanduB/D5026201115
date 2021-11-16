<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>GRE Dictionary</title>
</head>

<body id="top">

    <div class="container-lg">
        <div class="mt-4 p-5 bg-dark text-white rounded">
            <h1>Result</h1>
            <form action="dictionary" method="GET" >
            <div class="mt-4 p-5 bg-light text-dark rounded input-box search-box">
                <div class="row">
                    <div class="col-12">
                        <h2>

                            <?php
                            $word = array(
                                "abate", "aberrant", "abeyance", "abscond", "abstemious", "admonish", "adulterate", "aesthetic", "aggregate", "alacrity", "alleviate", "amalgamate", "ambiguous", "ambivalence", "ameliorate", "anachronism", "analogous", "anarchy", "anomalous",
                                "antipathy", "apathy", "appease", "apprise", "approbation", "appropriate", "arduous", "artless", "ascetic", "assiduous",
                                "assuage", "attenuate", "audacious", "austere", "autonomous", "aver", "banal", "belie", "beneficent", "bolster", "bombastic",
                                "boorish", "burgeon", "burnish", "buttress", "capricious", "castigation", "catalyst", "caustic", "chicanery", "coagulate",
                                "coda", "cogent", "commensurate", "compendium", "complaisant", "compliant", "conciliatory", "condone", "confound", "connoisseur",
                                "contention", "contentious", "contrite", "conundrum", "converge", "convoluted", "craven", "daunt", "decorum", "default", "deference",
                                "delineate", "denigrate", "deride", "derivative", "desiccate", "desultory", "deterrent", "diatribe", "dichotomy", "diffidence", "diffuse",
                                "digression", "dirge", "disabuse", "discerning", "discordant", "discredit", "discrepancy", "discrete", "disingenuous", "disinterested", "disjointed",
                                "dismiss", "disparage", "disparate", "dissemble", "disseminate", "dissolution", "dissonance", "distend", "distill", "diverge", "divest", "document",
                                "dogmatic", "dormant", "dupe", "ebullient", "eclectic", "efficacy", "effrontery", "elegy", "elicit", "embellish", "empirical", "emulate",
                                "endemic", "enervate", "engender", "enhance", "ephemeral", "equanimity", "equivocate", "erudite", "esoteric", "eulogy", "euphemism", "exacerbate",
                                "exculpate", "exigency", "extrapolation", "facetious", "facilitate", "fallacious", "fatuous", "fawning", "felicitous", "fervor",
                                "flag", "fledgling", "flout", "foment", "forestall", "frugality", "futile", "gainsay", "garrulous", "goad", "gouge", "grandiloquent", "gregarious", "guileless", "gullible",
                                "harangue", "homogeneous", "hyperbole", "iconoclastic", "idolatry", "immutable", "impair", "impassive", "impede", "impermeable", "imperturbable", "impervious", "implacable",
                                "implicit", "implode", "inadvertently", "inchoate", "incongruity", "inconsequential", "incorporate", "indeterminate", "indigence", "indolent", "inert",
                                "ingenuous", "inherent", "innocuous", "insensible", "insinuate", "insipid", "insularity", "intractable", "intransigence", "inundate",
                                "inured", "invective", "irascible", "irresolute", "itinerary", "laconic", "lassitude", "latent", "laud", "lethargic", "levee", "levity", "log", "loquacious", "lucid", "luminous",
                                "magnanimity", "malingerer", "malleable", "maverick", "mendacious", "metamorphosis", "meticulous", "misanthrope", "mitigate", "mollify", "morose", "mundane", "negate",
                                "neophyte", "obdurate", "obsequious", "obviate", "occlude", "officious", "onerous", "opprobrium", "oscillate", "ostentatious", "paragon", "partisan",
                                "pathological", "paucity", "pedantic", "penchant", "penury", "perennial", "perfidious", "perfunctory", "permeable",
                                "pervasive", "phlegmatic", "piety", "placate", "plasticity", "platitude", "plethora", "plummet", "porous", "pragmatic", "preamble", "precarious", "precipitate",
                                "precursor", "presumptuous", "prevaricate", "pristine", "probity", "problematic", "prodigal", "profound", "prohibitive", "proliferate", "propensity", "propitiate",
                                "propriety", "proscribe", "pungent", "qualified", "quibble", "quiescent", "rarefied", "recalcitrant", "recant", "recluse",
                                "recondite", "refractory", "refute", "relegate", "reproach", "reprobate", "repudiate", "rescind", "resolution", "resolve", "reticent", "reverent", "sage",
                                "salubrious", "sanction", "satiate", "saturate", "savor", "secrete", "shard", "skeptic", "solicitous", "soporific", "specious", "spectrum", "sporadic",
                                "stigma", "stint", "stipulate", "stolid", "striated", "strut", "subpoena", "subside", "substantiate", "supersede", "supposition", "tacit", "tangential", "tenuous", "tirade",
                                "torpor", "tortuous", "tractable", "transgression", "truculence", "vacillate", "venerate", "veracious", "verbose", "viable", "viscous", "vituperative",
                                "volatile", "warranted", "wary", "welter", "whimsical", "zealot"
                            );
                            $meaning = array(
                                "subside , or moderate", "abnormal, or deviant", "suspended action", "depart secretly and hide",
                                "sparing in eating and drinking; temperate", "warn; reprove", "make impure by adding inferior or tainted substances",
                                "artistic; dealing with or capable of appreciating the beautiful", "gather; accumulate",
                                "cheerful promptness; eagerness", "relieve", "combine; unite in one body", "unclear or doubtful in meaning",
                                "the state of having contradictory or conflicting emotional attitudes", "improve", "something or someone misplaced in time", "comparable",
                                "absence of governing body; state of disorder", "abnormal; irregular", "aversion; dislike", "lack of caring; indifference",
                                "pacify or soothe; relieve", "inform", "approval", "acquire; take possession of for one’s own use",
                                "hard; strenuous", "without guile; open and honest", "practicing self-denial; austere", "diligent",
                                "ease or lessen (pain); satisfy (hunger); soothe (anger)", "make thinner", "daring; bold", "forbiddingly stern; severely simple and unornamented",
                                "self-governing; independent", "assert confidently or declare; as used in law, state formally as a fact",
                                "hackneyed; commonplace; trite; lacking originality", "contradict; give a false impression", "kindly; doing good",
                                "support; reinforce", "pompous; using inflated language", "rude; insensitive", "grow forth; send out buds", "make shiny by rubbing; polish", "support; prop up",
                                "unpredictable; fickle", "punishment; severe criticism", "agent that increases the pace of a chemical action", "burning; sarcastically biting", "trickery; deception",
                                "thicken; congeal; clot", "concluding section of a musical or literary composition;summarizes or concludes", "convincing", "corresponding in extent, degree, etc.; proportionate",
                                "brief, comprehensive summary", "trying to please; overly polite; obliging", "yielding; conforming to requirements", "reconciling; soothing",
                                "overlook; forgive; give tacit approval; excuse", "confuse; puzzle", "person competent to act as a judge of art; a lover of art", "claim; thesis", "quarrelsome",
                                "penitent", "riddle; difficult problem", "approach; tend to meet; come together", "coiled around; involved; intricate", "cowardly",
                                "intimidate; frighten", "propriety; orderliness and good taste in manners", "failure to act", "courteous regard for another’s wishes", "portray; depict; sketch", "blacken",
                                "ridicule; make fun of", "unoriginal; obtained from another source", "dry up", "aimless; haphazard; digressing at random", "Something that discourages; hindrance",
                                "bitter scolding; invective", "split; branching into two parts (especially contradictory ones)", "Shyness", "wordy, rambling, spread out (like a gas)",
                                "Wandering away from the subject", "Lament with music", "correct a false impression; undeceive", "mentally quick and observant; having insight",
                                "not harmonious; conflicting", "defame; destroy confidence in; disbelieve", "lack of consistency; difference", "separate; unconnected; consisting of distinct parts",
                                "lacking genuine candor; insincere", "unprejudiced", "lacking coherence; separated at the joints", "eliminate from consideration; reject", "belittle", "basically different; unrelated",
                                "disguise; pretend", "distribute; spread; scatter (like seeds)", "disintegration; looseness in morals", "discord; opposite of harmony", "expand; swell out",
                                "purify; refine; concentrate", "vary; go in different directions from the same point", "strip; deprive", "provide written evidence", "opinionated; arbitrary; doctrinal",
                                "sleeping; lethargic; latent", "someone easily fooled", "showing excitement; overflowing with enthusiasm",
                                "selective; composed of elements drawn from disparate sources", "power to produce desired effect",
                                "impudence; shameless boldness; sheer nerve;presumptuousness", "poem or song expressing lamentation", "draw out by discussion", "adorn; ornament; enhance, as a story",
                                "based on experience", "imitate; rival", "prevailing among a specific group of people or in a specific area or country", "weaken", "cause; produce", "increase; improve",
                                "short-lived; fleeting", "calmness of temperament; composure", "lie; mislead; attempt to conceal the truth", "learned; scholarly", "hard to understand; known only to the chosen few",
                                "expression of praise, often on the occasion of someone’s death", "mild expression in place of an unpleasant one", "worsen; embitter", "clear from blame",
                                "urgent situation; pressing needs or demands; state of requiring immediate attention", "projection; conjecture", "joking (often inappropriately); humorous",
                                "help bring about; make less difficult", "false; misleading", "brainless; inane; foolish, yet smug", "trying to please by behaving obsequiously, flattering, or cringing", "apt;suitably expressed; well chosen",
                                "glowing ardor; intensity of feeling", "droop; grow feeble", "inexperienced", "reject; mock; show contempt for", "stir up; instigate", "prevent by taking action in advance", "thrift; economy",
                                "useless; hopeless; ineffectual", "deny", "loquacious; talkative; wordy", "urge on", "overcharge", "pompous; bombastic; using high-sounding language", "sociable", "without deceit", "easily deceived",
                                "long, passionate, and vehement speech", "of the same kind", "exaggeration; overstatement", "attacking cherished traditions", "worship of idols; excessive admiration",
                                "unchangeable", "injure; hurt", "without feeling; imperturbable; stoical", "hinder; block", "impervious; not permitting passage through its substance",
                                "calm; placid", "impenetrable; incapable of being damaged or distressed", "incapable of being pacified", "understood but not stated", "burst inward", "unintentionally; by oversight; carelessly",
                                "recently begun; rudimentary; elementary", "lack of harmony; absurdity", "insignificant; unimportant", "introduce something into a larger whole; combine; unite",
                                "uncertain; not clearly fixed; indefinite", "poverty", "Lazy", "inactive; lacking power to move", "naive and trusting; young; unsophisticated",
                                "firmly established by nature or habit", "Harmless", "unconscious; unresponsive", "hint; imply; creep in", "lacking in flavor; dull",
                                "narrow-mindedness; isolation", "unruly; stubborn; unyielding", "refusal of any compromise; stubbornness", "overwhelm; flood; submerge", "accustomed; hardened", "abuse", "irritable; easily angered",
                                "uncertain how to act; weak", "plan of a trip", "brief and to the point", "languor; weariness", "potential but undeveloped; dormant; hidden",
                                "praise", "drowsy; dull", "stone embankment to prevent flooding", "lack of seriousness or steadiness; frivolity", "record of a voyage or flight; record of day-to-day activities", "talkative",
                                "easily understood; clear; intelligible", "shining; issuing light", "Generosity", "one who feigns illness to escape duty", "capable of being shaped by pounding; impressionable",
                                "rebel; nonconformist", "lying; habitually dishonest", "change of form", "excessively careful; painstaking; scrupulous", "one who hates mankind",
                                "appease; moderate", "soothe", "ill-humored; sullen; melancholy", "worldly as opposed to spiritual; everyday", "cancel out; nullify; deny", "recent convert; beginner",
                                "stubborn", "lavishly attentive; servile; sycophantic", "make unnecessary; get rid of", "shut; close", "meddlesome; excessively pushy in offering one’s services", "burdensome", "infamy; vilification",
                                "vibrate; waver", "showy; pretentious; trying to attract attention", "model of perfection", "one-sided; prejudiced; committed to a party", "pertaining to disease", "Scarcity",
                                "showing off learning; bookish", "strong inclination; liking", "severe poverty; stinginess", "something long-lasting", "treacherous; disloyal", "superficial; not thorough; lacking interest, care, or enthusiasm",
                                "penetrable; porous; allowing liquids or gas to pass through", "spread throughout", "calm; not easily disturbed", "devoutness; reverence for God", "pacify; conciliate", "ability to be molded",
                                "trite remark; commonplace statement", "excess; overabundance", "fall sharply", "full of pores; like a sieve", "practical (as opposed to idealistic); concerned with the practical worth or impact of something",
                                "introductory statement", "uncertain; risky", "rash, premature, hasty, sudden", "forerunner", "arrogant; taking liberties", "lie", "characteristic of earlier times; primitive; unspoiled", "uprightness; incorruptibility",
                                "doubtful; unsettled; questionable; perplexing", "wasteful; reckless with money", "deep; not superficial; complete", "tending to prevent the purchase or use of something; inclined to prevent or forbid", "grow rapidly; spread; multiply",
                                "natural inclination", "appease", "fitness; correct conduct", "ostracize; banish; outlaw", "stinging; sharp in taste or smell; caustic", "limited; restricted",
                                "minor objection or complaint", "at rest; dormant; temporarily inactive", "made less dense (of a gas)",
                                "obstinately stubborn; determined to resist authority; unruly", "disclaim or disavow; retract a previous statement; openly confess error", "hermit; loner",
                                "abstruse; profound; secret", "stubborn; unmanageable", "disprove", "banish to an inferior position; delegate; assign", "express disapproval or disappointment", "person hardened in sin; devoid of a sense of decency",
                                "disown; disavow", "cancel", "Determination", "determination; firmness of purpose", "reserved; uncommunicative; inclined to silence", "respectful; worshipful",
                                "person celebrated for wisdom", "healthful", "approve; ratify", "satisfy fully", "soak thoroughly", "enjoy; have a distinctive flavor, smell, or quality",
                                "hide away or cache; produce and release a substance into an organism", "fragment, generally of pottery", "doubter; person who suspends judgment until having examined evidence supporting a point of view", "worried; concerned",
                                "sleep-causing; marked by sleepiness", "seemingly reasonable but incorrect; misleading (often intentionally)", "colored band produced when a beam of light passes through a prism",
                                "occurring irregularly", "token of disgrace; brand", "be thrifty; set limits", "make express conditions; specify", "dull; impassive", "marked with parallel bands; grooved",
                                "pompous walk ;supporting bar", "writ summoning a witness to appear", "settle down; descend; grow quiet", "establish by evidence; verify; support", "cause to be set aside; replace; make obsolete", "hypothesis; surmise",
                                "understood; not put into words", "peripheral; only slightly connected; digressing", "thin; rare; slim",
                                "extended scolding; denunciation; harangue", "lethargy; sluggishness; dormancy", "winding; full of curves", "docile; easily managed", "violation of a law; sin",
                                "aggressiveness; ferocity", "waver; fluctuate", "revere", "truthful", "wordy", "practical or workable", "sticky, gluey", "abusive; scolding", "changeable; explosive; evaporation rapidly",
                                "justified; authorized", "very cautious", "turmoil; bewildering jumble", "capricious; fanciful", "fanatic; person who shows excessive zeal"
                            );

                            $input_word = $_POST['inputWord'];
                            $var = -1;
                            for ($i = 0; $i < count($word); $i++) {
                                if ((strtolower($input_word)) === $word[$i]) {
                                    $var = $i;
                                }
                            }
                            if ($var == -1) {
                                echo ('Kata Tidak ditemukan');
                            } else {
                                echo $meaning[$var];
                            }
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-danger mt-5" style="width: 90px;"> Clear</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>
