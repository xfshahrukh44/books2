@extends('layouts.main')

@section('title', 'Article detail')

@section('css')

@endsection


@section('content')

    <section class="section5 mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h_p">
                        <h2 class="mb-0">{{$article->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="article-content-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-content">
                        {!! $article->content !!}
{{--                        <h2>Introduction</h2>--}}
{{--                        <p>RGENT'INA WOULD SfiEv to orrvR little justification for tribal sentiment. Like most countries,--}}
{{--                            rind particularly New World countries, Argentina is in no sense an extended biological family--}}
{{--                            united by common ancestry. The area’s first inhabitants were warring native tribes who became--}}
{{--                            “Indians” only after Europeans refused to see them as they saw themselves: as distinct religious--}}
{{--                            and linguistic groups holding little in common with each other. The Spanish conquest and--}}
{{--                            subsequent capitalist expansion brought Europeans and Africans to the Southern Cone who--}}
{{--                            liberally crossed genes and cultures with the natives and with each other, so much so that both--}}
{{--                            natives and immigrants lost much of their ethnic distinctiveness. In the late niiieteenth and--}}
{{--                            early twentieth centuries, the Argentine niix master continued its work of amalgamation with--}}
{{--                            newcomers from Europe and from Argentina’s interior, the latter being the mixed-blood cnbecitas--}}
{{--                            negras (little black-heads) who filled Argentina’s cities in search of employment. Cultural--}}
{{--                            interpenetration founil its political reflection in a nation seemingly in the modernist mold,--}}
{{--                            complete with a liberal constitution, pluralist democracy, and mechanisms for naturalizing and--}}
{{--                            assimilating immigrants. Yet, as we will see below, for some Argentines the liberal nation was--}}
{{--                            not enough, for eventually Argentina would produce its own tribalist mythology which in turn--}}
{{--                            would provide essential ingredients for Argentine nationalism—a nationalism quite at variance--}}
{{--                            with the liberal sense of nationhood.</p>--}}
{{--                        <p>One of the chief architects of this tribalist enterprise was Rail Scslabrini Ortiz (1898—195S), a--}}
{{--                            populist intellectual, revisionist historian, and defender of Peronism. 2 Scalabrini is best--}}
{{--                            known outside of Argentin B fOr works I do not ex- amine here: his watershed historical studies--}}
{{--                            on the Argentine economy, f'ofi/icc britdnica en el R No âe la Plata and Historia de los--}}
{{--                            ferrocnrrile,s nrgentinos both of 1940.* Largely because of Scalabrini’s furious anti-British--}}
{{--                            sentiment, his su¡iport of Perón, and liis refusal to take sides in World War 11, these booKs--}}
{{--                            were immediately coiitroversial, althougli they later gained widespread credence ainong--}}
{{--                            anti-imperialists of eveiy political stripe.^ In addition to being a historian, however,--}}
{{--                            Scalnbrini sas an imaginative student and inventor of the Argentine soul. This aspect of his--}}
{{--                            thought has received little critical attention, despite the fact that El hombre que està solo y--}}
{{--                            espera, mis major essay on argeniiriidad and tire one to which I devote most of my oitention--}}
{{--                            here, has reinained in print since it first appeared in 1931.</p>--}}
{{--                        <p>My goal in this article is tlucefold. In the section iininediately follo wing I outline what--}}
{{--                            inight be called ri paradigm of tribal identity, drawing cliiefly from tire Biblical story of--}}
{{--                            the House of Israel—the most long-Iived and successful tribal story of Western Civilization.--}}
{{--                            After this soinewhat distuptive but neces- sari digression, I compare the Biblical story with--}}
{{--                            Scalabrini’s descri¡ition of Argentina's true identity and show how he seeks to invent a--}}
{{--                            neo-tribal identity for moilern Argentina, a myth of “natural” nationhood that, however enduring--}}
{{--                            and iiuaginative, inost certainly lias no einpiricel or rational support. I conclude with a--}}
{{--                            brief look at how Scalabrini’s politically successful imaginings might contiibute to our--}}
{{--                            understanding of n»tiona1ism generally, particularly within the framework createil by--}}
{{--                            influential scholars like E. J. Hobsbawin and Benedict Anderson.</p>--}}
{{--                        <h2>The Tribcf Pai adigm.- A Lessoii fram Genesis</h2>--}}
{{--                        <p>Virtually every tribal history begins with a super1u.nnan explanation, be its name God, Spirit,--}}
{{--                            or metaphysics. Not untypical is the Biblical rendition of God’s first call to Abram:</p>--}}
{{--                        <p>Now the Lord said to Abram, “Oo from your country and your kindred and your father's house to the--}}
{{--                            land thnt I will show you. I will make of you a great nation, and I will bless you, and make--}}
{{--                            your name great, so that you yilI be a blessing. I will bless those who bless you, and the one--}}
{{--                            who curses you I will curse; and in you oil ttie families of the earth shell be blessed.” (Gen.--}}
{{--                            l2:1—3)</p>--}}
{{--                        <p>Prom this short passage we can identify five crucial elements of the tribal paradigm, elements I--}}
{{--                            will refer to, if the reader will forgive a neologisin, as “tribalemes.” F-irst, the genesis of--}}
{{--                            a tribe is metaphysical, abstract, beyond the senses. In Abram’s case, that cause was Yahweh,--}}
{{--                            the tribnl ileity who would eventually metamorphose into the God of judaism, Christianity, and--}}
{{--                            Islam. This metaphysical princi¡ile, however, need not be a deity. As Auguste Comte pointed out--}}
{{--                            in his condemnation of rnetaphysics, concepts no less abstiact—the social contract or man’s--}}
{{--                            inalienable riglits for exemple—often serve the same tunction. A second tribaleme proclaimed in--}}
{{--                            the above passage is the tribe’s lirik to a particular land, a ¡ii-oinised land, that will not--}}
{{--                            only be the 5pace where the tribe enacts its history, but also a supernatiual element in the--}}
{{--                            tribe’s collective identity, a place of origin, iniracles, and dreams of eventual retum. Tliird,--}}
{{--                            the Biblical story liriks collective identity to a patriarch yho in turn gives his posterity--}}
{{--                            lineage and iiiterrelatedness. The tribe is tlius a family, and childi'en of the family are--}}
{{--                            born, not made. Moreover, the patriarch becoines patriarchy as his desceiidants assuine tribal--}}
{{--                            leadership. Fourtli, the tribe is given a promise that places it above other peoples (“the one--}}
{{--                            who curses you I will curse”) making it a covenant people favored by God. And finally, the ttibe--}}
{{--                            is given a holy mf66fon (“in you ull the families of the earth will be blessed”), a gtand,--}}
{{--                            collective destiny.</p>--}}
{{--                        <p>Later passages in Grnesis add naines and sigtis to the tribal paradigm. God clianges Abram’s name--}}
{{--                            to Abraham, seying, “No longer shall your name be Abrain, but your ritme s1iaI1 be Abraham, for--}}
{{--                            I llave made you the ancestor of a multitude of nations” (Generis 17:5). "the new name tlius--}}
{{--                            invokcs the promise of patriarcliy and chosenness. Abraham’s descendents also receive a new name--}}
{{--                            when God changes the name of lacob, Abraham’s grandson, to Israel, the root of the tribal name--}}
{{--                            of Israelites and the House of Israel by which all of Jacob’s descendants will be known (Genesis--}}
{{--                            à5: 9—10). Accompanying the new name is a sign, that of circumcision, a iiiark placed on men of--}}
{{--                            the covenant.* Names and signs abound throughout the history of collective identity, be they--}}
{{--                            families, tribes, or modern nations. For exemple, in our tinaes, tlirougli convcrsion or--}}
{{--                            naturalization, citizens in modern nations take on new names to show ncw allegiances. In a--}}
{{--                            similar fiishion, the physical sign of identity inarked by circumcision is not unlike national--}}
{{--                            símbols of flags, seals, and uniforms. All inark a special relationship by which the individual--}}
{{--                            surrenders identity to the collective.</p>--}}
{{--                        <p>Another factor in the tribul paradigm as it einerges from the Gcnesis story is the need to--}}
{{--                            excliide, to identify enemics and lesser mortals. Sai ai, being barren, urgcd her husbanil to--}}
{{--                            have a child with the slave woinan Hagar. But once the child, Isliinael, was born, Sarai becaine--}}
{{--                            jealous of Hagsr with a fury that exploded several years later on seeing Ishmael playing with--}}
{{--                            Sarai’s newborn cliild, Isaac. “So slae said to Abraham, ‘Cast out tliis slave woinan with her--}}
{{--                            son; íor the son of this slave woman sliall not inlierit along wïtli my son Isaac' ” (C;enesis--}}
{{--                            11-11). No family, tribe, or uation hss ever functioned without restricting membership and its--}}
{{--                            privileges—which is another way of defining outsiders and enemies. However harsh Sarai’s action,--}}
{{--                            she established the need of a collectivity to include as well as exclude. Isaac end his pos---}}
{{--                            terity would be the children of the covenant, the bearers of the sign, and the recipients of the--}}
{{--                            promise. Their specialness has meaning only if others are excluded.</p>--}}
{{--                        <p>The capstone of the tribal paradigm is the right to demand sacrifice, by the voice of God, the--}}
{{--                            voice of kings who rule through divine right, or the collective voice of an idealized people--}}
{{--                            whose elected leaders speak for tltem. Abraham and Sarah have only one son, Isaac, the one--}}
{{--                            destined by God to carry the birthright to all Abraham’s posterity. As their only son, he is the--}}
{{--                            special bearcr of promise and privilege and an essential link in tribal continuity. Yet, God--}}
{{--                            chooses to test Abraham’s devotion to the covenant by commanding him to offer Isaac as a burnt--}}
{{--                            sacrifice. Abraham dutifully builds the nltar, binds the boy on top of a wood pyre, and--}}
{{--                            stretches forth his knife to kill him. At the last moment, an angel stops Abraham, but only--}}
{{--                            afrer a crucial point has heen made: the individual who is allied to the collective must be--}}
{{--                            prepared to give back to the collective even if the collective requires his life.</p>--}}
{{--                        <p>The Genesis story then offers a concise list of “tribaternes.” These would include the--}}
{{--                            supernatural cause, the sacretl land, the founding of a family and a patriarchy, the favored--}}
{{--                            status of the collective over other peoples, the holy mission or collective destiny of the--}}
{{--                            collective, the special names and signs of group identity, the capacity to identify end exclude--}}
{{--                            enemies, and the right to demand sacrifice.</p>--}}
{{--                        <h2>"£he Neo-Tribalisni of Arq enlina ’s Raúl Scalnbritii Ortiz</h2>--}}
{{--                        <p>Little in Scalabrini’s eiirly year.s indicated that he woulil eventually author a book like El--}}
{{--                            llonibre que està solo y esyera, inuch less becon e s searing critic of British impeiialisin and--}}
{{--                            a major nationalist thiuker. Although trained as a surveyor and engineer, young Raúl showed--}}
{{--                            literary talent of a belletrist sort (a.s well as prowess as o boxer). Barely twenty-five years--}}
{{--                            old, he published in 1923, la Jrtringa, a collection of short stories that occupies a ininor--}}
{{--                            place iii Argentina’s literary canon. By the late 1920s he wi• ' •8 ula rly contributing--}}
{{--                            cultural commentary to lluenos Aires’s leading inagazines and newspa¡iers, including the--}}
{{--                            patrician daily M Nación.</p>--}}
{{--                        <p>Politics and economics, liowever, drcw Scalabrini away from iinaginative literature. On September--}}
{{--                            6, 1930, Argentina, facing a plunging export market brouglit on by the world economic--}}
{{--                            depression, experienced an event that would prove decisive in the country’s history aittl also--}}
{{--                            cliange the course of Scalabrini’s life: General José Félix Uriburu led armed troops against the--}}
{{--                            second presideney of Hipólito Yrigoyen in the country’s first coup of this centur y, The coup--}}
{{--                            ended nearly eiglsty years of institutional goverroneiit and revealed the fragility of--}}
{{--                            Argentina’s democratic institutions. A fascist sympathizer 8nd devout Catholic, Uriburu proved--}}
{{--                            too naive and inflexible to be president, and after less than a year in power, he was replaced--}}
{{--                            by General Augusto P. Justo, a wily arid ebullient politician with grand ideas and few simples.--}}
{{--                            Justo's versatility in fraud and general disregard for democratic procedure led many Argentines--}}
{{--                            to refer to the 1930s as fu ilécyda infante, the infainous decade. The coincidence of economic--}}
{{--                            decline and political failure also inspired (and disillusioned) a reinarkable generation of--}}
{{--                            writers, intellectuals, end historians who cante of Age in the 1930s, Scalabrini ainong them. A--}}
{{--                            year after the coup, he r iblished El hombre que estn solo y esperar.</p>--}}
{{--                        <p>Scalabrini begins El hombre que está solo y espera with two striking images whosc force extends--}}
{{--                            beyond liistory to myths of creation und first causes laighly reminiscent of the tribal--}}
{{--                            paradigin outlined earlier. In the prologue, Scalabrini--}}
{{--                            •'6° es that Argentiiin, oí better said, the authcntic Argentina, inust be rriede in the image--}}
{{--                            of the “spirit of the land [which is] like a giant irían [who] because of his measureless size--}}
{{--                            is as invisible to us as we bre to microbes. [That gi• t1 i an enormous archetype that fed on--}}
{{--                            antl grew from the immigrant infiitx, devouring and assiinilating inillions of Spaniards without--}}
{{--                            ever ceasing to be idcntical to itself. Destiny shrinks before [the spirit's) g'andeur.--}}
{{--                        </p>--}}
{{--                        <p>The spirit of the land implicity denies nation-iraking as a rational enterprise, or ii consensual--}}
{{--                            activity involving Renan's daily plebiscite. Rather, it suggests a nostalgia for a supernatursl--}}
{{--                            cause not unlike the God of the Hebrew J3ible. Scalabrini seeks an cxplanation beyond history at--}}
{{--                            d science. In his scheine of things, Argentina’s true foundation is a spirit, a supernatural--}}
{{--                            cause, an echo of the Biblical phrase, “Nos the Lord said to Abram” (Genesis 12:1).</p>--}}
{{--                        <p>By linking that spirit to the land, Scalabrini invokes a secoiail powerful image, the land--}}
{{--                            itself—and to some degree conflatcs metapliysics with place, God with land. Yaliweli’s proinise--}}
{{--                            to Abruin begins with the proinise of a new land: “Go from your country and your kindred and--}}
{{--                            your father’s house to the land that I will show you ”(Gencsis 12:1). In Scalabrini's imagery,--}}
{{--                            Argentina’s rlcstiny--}}
{{--                            is also linked to a land that woiild give the country its special cliaracter as well as--}}
{{--                            determine its destiny. The land becomes a primer y and mctaphysical cause that preceiles and--}}
{{--                            supersedes the prilitical nation. Like Abraham’s God, the spirit of the land does not heed the--}}
{{--                            wishes of individuals, but appoints them to its own purposes.</p>--}}
{{--                        <p>The authentic Argentine, the one moved by the spirit of the land, needs a name, an outward sign--}}
{{--                            of his ture identity. Scalabrini gives him several names, “The Man Who Is Alone and Uniting” or--}}
{{--                            more commonly, If fiombre de Cori-ieiites y Esnierctlda, The Man of Corrientes and Esmei'altla--}}
{{--                            Streets. The corner of Corrieutes and Esineralda is a fairly insignificant point in downtown--}}
{{--                            Buenos Aires, the intersection of a busy thorougli1’sre and relatively short side street. That--}}
{{--                            this point does not reflect grandeur is precisely Scalabrini’s intention. Ttie man of such a--}}
{{--                            coriwi' would be a typical Argentine, n porteño, a product of the real Buenos Aires. What--}}
{{--                            distinguishes this individual, lio wever, is his sensitivity to the motions of the spirit of the--}}
{{--                            land. Scalabrini 's terminology here blends notions of typical Argentine with a somewhat--}}
{{--                            contradictory notion of the typical por-teno. The ti ue porteño thus has more in common with the--}}
{{--                            provincial Argentine than with the foreignized and foreignizing enemy; both are defined by their--}}
{{--                            submission to the spirit of the land. Or said differently, Scalabrini distinguishes true--}}
{{--                            Argentines from lheireneinies—not porteños from provincials. This i‹lentity, however, hoes not--}}
{{--                            come without cost:</p>--}}
{{--                        <p>The porieiio man [he oould jtlst as easily say "lie Man of Con-ientes ilnrl Esmeralda4 is held--}}
{{--                            back, us time itself is held back, by hue sensation of his powerlessness before the purposes of--}}
{{--                            the spis4t of the lnnd, to which his destiny is emotionally and unchangingly werl. To free--}}
{{--                            himself of that responsibility, of which he is moth author and agent, the man amputates a--}}
{{--                            fi-action of himself, and cedes to the collectivity some ofi time rights unit--}}
{{--                            ‹luties conferred on him. (64)</p>--}}
{{--                        <p>Scalabrini’s true Argentine thus surrenders his individuality to the group, to the tribe. This--}}
{{--                            siniender of self may be t›ainful, a kin‹l of amputation as Scalabrini puts it, yet one--}}
{{--                            necessary for the spirit to realize its destiny as well as the individual to realize his. Liber--}}
{{--                            a1 individualism must yield to the collective or tribal man who in his collectivity responds--}}
{{--                            only to the mysterious impulses of the spirit of the laiiil.</p>--}}
{{--                        <p>As in other ciises, Scalabrini’s imagery of ltte spirit that overrides the will of the individual--}}
{{--                            bears comparison with the tribal identity given to the House of Israel. The God of Israel was a--}}
{{--                            jealous god, a god who commandeil his people to disavow all other gods and render homage only to--}}
{{--                            Yahweh. As Knren Armstrong shows in her remarkable book A ffis/ory of God, the early peoples of--}}
{{--                            Palestine were a polytheistic society for whom Yahweh was merely one god among many, s god who--}}
{{--                            first proved his efficacy as the Lord of Sabbaoth, or god of the armies. Other gods and--}}
{{--                            goddesses—Baal, Murdtik, and Islitar for example- lived alongside Yahweh in the popular--}}
{{--                            imagination. To some degree, ii«lividuals could manipulate their world by invoking the help of--}}
{{--                            different gods for different purposes. Like Scalabrini's spirit of the land, however, Yahweh had--}}
{{--                            his own goals, the first of which WRs his deiiiand for exclusive allegiance, an allegiance thar--}}
{{--                            in tarn superseded individual will and allowed for the collective obedience that would provicle--}}
{{--                            the foundation for tribal associations. Inlerestingly, the early Hebrew writers do not appear to--}}
{{--                            see the other gods as unreal; rather, Yahweh‘s Remand for allegiance is portrayed as a struggle--}}
{{--                            between real gods, with Yahwoh being the one who would eliminate the others.</p>--}}
{{--                        <p>ScolabrirH's notion that the individual Argentine must submit to the spirit of the land and even--}}
{{--                            amputate a part of himself to join the collectivity invokes nearly identical imagery. In a word,--}}
{{--                            the true Argentine must sacrifice something, however dear, to show his submission to the spirit--}}
{{--                            of the land and his desire to be one with the collectivity. The capstone of the tribal paradigm--}}
{{--                            is the right to demand sacrifice, by the voice of God, the voice of kings who rule through--}}
{{--                            divine right, or the collective voice of an idealized people whose elected leaders speak for--}}
{{--                            them. In the myth of Israel, Abraham and Sarah have only one son,%. Isaac, the one destined by--}}
{{--                            God to carry the birthright to all A bralian4's posterity. Yet, Abraham’s willingness to kill--}}
{{--                            his son to preserve the covenant makes on essential point: the individual who is allied to the--}}
{{--                            collective must be prepared to give back to the collective even if it means the life of his only--}}
{{--                            heir. Scalabrini’s image of the need to amputate part of oneself is no less striking.*3 failure--}}
{{--                            to abandon foreign gods and submit only to Yahweh also biought hardship. Indeed, Israel's--}}
{{--                            travails are repeatedly attributed to the people’s refusal to forsake foreign gods and worship--}}
{{--                            only Yahweh. Scalabrini also condemns those Argentines who do not hear- and obey the spirit of--}}
{{--                            the land. Moreover, his unrightcous, like those of ancient Israel, showed their sinfulness by--}}
{{--                            submitting to foreign gods. Argentina’s repeated crises, and particularly the crisis of 1930,--}}
{{--                            was in Scalabrini’s description brought on by the failure of Argentine liberals to submit to the--}}
{{--                            spirit of the land:</p>--}}
{{--                        <p>[The liberals] had ideals, outlines of idenls that seemed within easy reach. They naively'--}}
{{--                            believed in science. The biologists, the physiologists, the chemists, ihe asti'onoiners find the--}}
{{--                            mechanics were iill lay priests of [the liberal] religion. In few years, they perverted the--}}
{{--                            dynamic of the country. They allied themselves to foreign capital, and together they foun‹led--}}
{{--                            towns, laid railroads, constructed ports, dragged canals and dikes, imported machinery,--}}
{{--                            distributed the land arid colonized it. In such tasks, they diligently occupied themselves, arid--}}
{{--                            they failed to attend to the spirit of the country. (Scalabrini Ortiz, 55)</p>--}}
{{--                        <p>Failure in sucli tasks was inevitable because they were not autl entre, and the Man of Coiyientes--}}
{{--                            and Esmeralda “is immitrie to everything not boni in himself” (40). The projects of liberalism--}}
{{--                            could not succeed because the real Argentine mistrusts “all the conventional lies of European--}}
{{--                            culture” (92). The mystical encounter they souglit had to spring from their own land and could--}}
{{--                            not be iinported. As with the children of Israel, their salvation fay in abandoning foreign gods--}}
{{--                            arrl obeying Oie spirit of the land, flic true god of the Argentine expanse. Underlying--}}
{{--                            Scalabrini's indictment of Argentine liberals is a sense that Argentina’s true and grand destiné--}}
{{--                            had been frustrated, that the Argentine equivalent of “in you all the fümilies of the earth--}}
{{--                            shall be blessed” had not been rcalized because the children of the promise had worsliipped--}}
{{--                            othcr gods.</p>--}}
{{--                        <p>lt is not enough, however, to reject the lay priests of foreign doctrines—the biologists,--}}
{{--                            chemists, and techniciens listed above; the true Argentine must also accept a new epistemology--}}
{{--                            by which knowledge is conferred and reject the empirical and rational procèsses that justified--}}
{{--                            forei@T1 dogmas. To define this new episteinolos , Scalabrini tells us that the porteño doesn’t--}}
{{--                            think and in the final analysis he doesn’t need to think. Rather, he must intuit; tte must trust--}}
{{--                            in his feelings fiâlpitos). Scalabrini inaintains that “the porteiio doesn’t think; he feels. I--}}
{{--                            feel, therefore I am, is a more appropriate aphorism than the Cartesian one.” Later he affirms--}}
{{--                            that “the porteño docs not plan. Rather than rely on planning, he waits for sudden intuiûoiis”--}}
{{--                            (75). And in those intuitioiis the true Argentine hcars the voice of tire land. Moreover, anyone--}}
{{--                            who fails to hear the land, bctrays his destiné as an Argentine. Por Scalabrini, improvisation--}}
{{--                            rather than rational planning is the method of choice, for improvisation will not betray--}}
{{--                            intuition the way planning does. Or ag he puts it:</p>--}}
{{--                        <p>The Manof Corrientes aiidflsmeralcia does not challenge, nor does he aspire to challenge, the--}}
{{--                            European's defense of European culture. The Man of Contented and Esmeralda iiuuitively--}}
{{--                            under.stands that compared to a European Argentina's most cultured men are but vulgar--}}
{{--                            apprentices. On such men, the real Argentine confers an honorariuin of deep disdain as those--}}
{{--                            intellectuals improvise shallow arguments against improvisation. Ann thot is one of the reasons--}}
{{--                            behind the unbreachable divorce that separates the intellectual realm from that of the poneilo.--}}
{{--                            (77-78). For Scnlabrini, feeling, rather than knowing, is the way the spirit of the land com---}}
{{--                            municates to its acolytes. One’s encounter with Argentina’s authentic destiny is possible only--}}
{{--                            when the voice of reason is superseded. The Man of Conientes and Esmeralda “intuits fialpitu)--}}
{{--                            judiciously, that in no book will he find help for his uncei tainties” (77).</p>--}}
{{--                        <p>Who will lead in such a system? Scnlabrini argues that a true Argentine leader must first anal--}}
{{--                            foremost hear the spirit of the land and in that hearing also discern the inchoate will of--}}
{{--                            authentic Argentines:</p>--}}
{{--                        <p>To decipher [the Man of Cotrientes end Eslneralda] one must be identical to him. Discerning his--}}
{{--                            will is flie despair of politicians, functionaries, heads of newspapers, and all others who in--}}
{{--                            some way depend on him. Men who are merely intelligent fail in public affairs. The Mnn of--}}
{{--                            Corrienles and Esmeralda, above all else. demands that public figures have not only book--}}
{{--                            knowledge, but also powerful instincts an‹l ready intuition; that is, they must be men of--}}
{{--                            {eeling ijiéilpito), F'or this reason, [the Man of Corrientes and fisineralda] is little--}}
{{--                            interested in p•°B *It $, Plat forms, and the verbiage of political parties. When faced with the--}}
{{--                            complex reality of Argentina, programs are false posturings compared to the reality of men arid--}}
{{--                            right conduct. Intuition fiâlpito) is the only effective pilot in the chaos of portefio life,--}}
{{--                            8nd the only virtue the possession of which the porteño will respect. (79—80)</p>--}}
{{--                        <p>In other words, the entire civic apparatus, its institutions, laws, procedures and methods, meim--}}
{{--                            little to Scalabrini Ortiz. The only possible government is tl4Rt of a person who understands--}}
{{--                            the inarticulate, and perhaps inotticulsble, voice of the authentic people. In short, what is--}}
{{--                            needed is a single leader on thorn the spirit of the land has conferred its mysticRI priesthood,--}}
{{--                            the universal priesthood of the voiceless believers. That leader is the incaniatiun of--}}
{{--                            Scalabnni’s nostalgia for Yahweh’s prophet, for the patriarch Abraham, for the Moses who liearcl--}}
{{--                            God in the buniing bush. Intuition in Scalabririi’s cpisieinology, repiaces the authori- tative--}}
{{--                            “Now the Lord said,” and it constitutes the new grounil by which prophets are chosen: tte who--}}
{{--                            intuits best sliotild lead the rest. Consequently, Scalabrini docs not stoy at tienouncing--}}
{{--                            subscrvience to European models; he also argttes that Argentine history, if properly read with--}}
{{--                            an ear to the spirit of the land, offers lessons on how Argentine should govern itself. The Man--}}
{{--                            of Corrientes and Esmeralda in Scalabrini’s view needs a strong leadcr; inoreover, Scalabrini--}}
{{--                            finds such leadership in the exemple of the ninefeenth-century fcdernlists who, unversed in--}}
{{--                            foreign ways, heard the spirit of the land and thus knew the will of the authentic people.</p>--}}
{{--                        <p>The name populist Argentine confei'i-ed on that man WHO ttltUifiS flHd afticulates the authentic--}}
{{--                            people’s will, is the inedieval term “caudillo.” Along with other revisionist historians,--}}
{{--                            Scalabrini helped popularize the notion that only a caudillo could govern Argentina and that in--}}
{{--                            this centuiy the name of the caudillo had been manifest in two persona: I4ipólito Yrigoyen and--}}
{{--                            Juan Domingo Perón.*° In one of liis most telling lectures, titled “Yrigoyen y Perón,”--}}
{{--                            Scalabrini argues that what inight have seved Yrigoyen were the “invisible links of--}}
{{--                            corrununication and understanding” between the people and their “conductor.” He writes:</p>--}}
{{--                        <p>The Oligarchy IauiJclJed against [Yrigoyen] their entire store of political attillery. It--}}
{{--                            surrounded nim with a flexible but unbreaLabIe belt of espionage and calumny. The newspapers--}}
{{--                            attaeked llÍlJi with their steeliest satirical ttarts, they called hom names, and besinirched--}}
{{--                            liim with vulgar accusotions. But the intuition of the people followed him with its accurate--}}
{{--                            instinct, and Yrigoyen's poyulaiity grew to the some degree that his enemies tried to discredit--}}
{{--                            liim, as though between the people and their potential conductor tliere had grown invisible--}}
{{--                            links of cominunication and understanding. (YriB• yen y Perón, ' 16—17)</p>--}}
{{--                        <p>In the some lecture, Scalabrini goes on to say that Yrigoyen did not fully under- stand that he--}}
{{--                            was the people's choice, that his will was what truly represented the people end the spirit of--}}
{{--                            the land, that he was their caudillo. As Scalabrini puts it:</p>--}}
{{--                        <p>Yrigoyen coiiiinitted two political errors. The first was that of stopping his revolutionary work--}}
{{--                            at Parliament’a doorsill and allowing a senate that came from the worst sector of Oligarchic--}}
{{--                            rule to impede the work of liis government in its quest for national re-vindication. The seconà--}}
{{--                            was leaving iniact the Oligarchy’s power base of land, newspapers, and privilege. These--}}
{{--                            political errors engendered [the coup] of September 6, 1930. ( <^*88I*8 I Rrñit, 22-23)</p>--}}
{{--                        <p>In suiri, according to Scalabrini, Yrigoyen’s error was in bet.ieving thnt he coiJld--}}
{{--                            reform Argentina through the mechanisms of political and economic liberalism. While--}}
{{--                            Scalabrini does not spcll out whnt he hod in mind, it would seem that Yrigoyen, in--}}
{{--                            Scalabrini’s view, should have abolished congress and confiscated the property and--}}
{{--                            newspapers of his wealthy enemies. Or said ditlereiitly, Scalabrini thought that--}}
{{--                            Yrigoyen should hRve behaved more like a God-chosen patriarch whoso righteousness in--}}
{{--                            defense of the people did not need institutional consensus. The Argentine tribe needed--}}
{{--                            its Moses, someone who would defend the authentic people and liberate the promised land--}}
{{--                            from the wicked and the powerful, someone whose authority caine from the land itself--}}
{{--                            rather than the niceties of bourgeois democracy.</p>--}}
{{--                        <p>Since the caudillo exists only as he intuits the spirit of the land which in--}}
{{--                            turn coheres with the unspoken intuition and will of the people, Scalabrini at some--}}
{{--                            point has to define his autlaentic people, those who are not anti- Argentiiles and--}}
{{--                            extrnnjerizaiites devoted to foreign models and cultures. In tliis endenvor he again--}}
{{--                            refiects a central concern of tribalisin as well as a problem concretely arldressed in--}}
{{--                            the Hebrew Bible. What distinguishes the People of God is their covenant with God, which--}}
{{--                            in turn gives the people specific rigbts and responsibilities.</p>--}}
{{--                        <p>Like the anonymous compilers of Hebrew scripture, Scalabrini also arques for the--}}
{{--                            existence of a covenant people—a people in covenant with tEe spirit of the land. In liis--}}
{{--                            Scheme of things, Argentina's autlientic people hfld their first iitcarnation with the--}}
{{--                            Revolucióii de Mayo of 1810, when the “Argentine inultitudes armed by a powerful--}}
{{--                            instinct of political und historical orientation” first deposited their faitli “in the--}}
{{--                            conductor who guided them,” in tliis csse Mariano Moreno yliose Jacobean“Plan--}}
{{--                            revolucionario”Sealabrini approvingly quotes at considerable length (l’rigoyen y Perón,--}}
{{--                            29—20; 11a-11). The covenant people appeared again at several key points in Argentina--}}
{{--                            histoiy, often in support of particular cnudillos among whom Scalabrini places Mariano--}}
{{--                            Moreiio, Manuel Dorrego, Juan Manuel de Rosas, and sevcral federalist caudillos. In--}}
{{--                            Scalabrini's reconstruqtion of Argentine history, the liberal constitution of 1853 was--}}
{{--                            ati act of popular betrayal, a surrender to foreign gods, nnd its primari inspiration,--}}
{{--                            the nineteenth-century tliinker luaii Bautista Alberdi, represents for Scalabrini “a--}}
{{--                            terrible indicator of the degree of submission to which a distinguished intellect cau--}}
{{--                            lower itself when it does not feed on iiiibending adhesion to the feelings of the people--}}
{{--                            of his naüve land” (Yrigo yen y Perón, 113).</p>--}}
{{--                        <p>For Scalabiini, however, the “foreigniziiag” impulses of Argentine liberalism caine to--}}
{{--                            naught because the immigrants drawn to Argentine sliores between 1860 and 1930 may have--}}
{{--                            been foreigners, but they were more nttuned to the spirit of their new land than their--}}
{{--                            adopted country’s “foreignized” liberals. As Scalabrini puts it:</p>--}}
{{--                        <p>The intruders formed hordes of the worst rtuality, of the vilest substance, were--}}
{{--                            i'efugees frotn races that ran over themselves iii their unchecked ambition, mobs--}}
{{--                            s¡›urred by the illusion of fortune, who carried, in exaggerated form, all the defects--}}
{{--                            of their society, and none of its virtues. They were beings of wretclie‹l interests,--}}
{{--                            tenacious because of theit' uusatisfierl appetites. Sensual and tenipestuoiis beings who--}}
{{--                            liked noise, music, dance and ieyeLi . (El liomlire que estd solo, 45)</p>--}}
{{--                        <p>With perverse delight Scalabrini in the foregoing quotation repeats all the prejudices of--}}
{{--                            Argentina’s elite who, while needing the cheap labor of migrants and immigrants, saw--}}
{{--                            them as intruilers who would weaken and besinirch the Europeanizcd, cultured Argentina--}}
{{--                            that was their dream.** Scalabrini soon drops his ironic pose and concludes that the--}}
{{--                            despised newcomers became the repository of the spirit of the land and thereby the true--}}
{{--                            covenant people and the snlvation of the country. With their arrival, “Büenos Aires--}}
{{--                            survived the danger of remaining segregated from the couotryside, of formiiig a--}}
{{--                            government without relationsliip to the painpas that nurtured leer and of which she was--}}
{{--                            syinbol, depository and fervent idea Q erisamiento ndicto)” (45). Argentina load been in--}}
{{--                            danger of Europeanization. But with the arrival of the migrants and immigrants, the--}}
{{--                            spirit of the land imposed its will, and the Man of Esmeralda and Corrientes again--}}
{{--                            reflected the cliaracteristics of the panipa: “He is laz.y, taciturn, long- suffering--}}
{{--                            and haughty. Buenos Aires is agarro the capital of the painpa” (51). While Scalabrini--}}
{{--                            did not advocate laziness or arrogance, at this juncture he sees in those qualities an--}}
{{--                            admirable resistance to the liberal “anti-Argentine” project.</p>--}}
{{--                        <p>Sealabrini's most einotional epiphany ol the true Argeritine people carne to--}}
{{--                            liim on October 17, 1945, when a multitude soinetitnes estimated at one niillion invaded--}}
{{--                            Buenos Aires’.s Plaza de Mayo in support of Juan Domingo Perón wlio had been arrested--}}
{{--                            and detained by political enemies on the island of Martín García, u srrial1 island in--}}
{{--                            the River Plate estuary. Ot that multitude Sculabrini writes:--}}
{{--                        </p>--}}
{{--                        <p>The fieldworker from Canuelas, the rivetei; the steelworker, the automobile iiieclienic,--}}
{{--                            the weaver; the peon—all matched togetlier, united in the seme voiee ann the same faith.--}}
{{--                            ’l’lley were the bedrock of the aroused patria. They were Ilie foundation od the nation--}}
{{--                            fliat was e nerging, just as bcdrock rose in prehistoiic times in the commotion of an--}}
{{--                            eartliquake. They were the substratum of our idiosyiicrasies and our collective--}}
{{--                            possibilities, olt of them pre.sent without fears or pretende. They were the no-ones and--}}
{{--                            rlde h;ve-notliings. manifest in a near infinite multiplicity o£ huma e varieties sull--}}
{{--                            color,s, glued togetlier by the saine emotion and impulse, sustaine‹l by a common truth--}}
{{--                            that only one word could translate: Perón. What 1 had dreamerl of and intuited for inany--}}
{{--                            years wiis present there, einbodied, intense, multifaceted, yet all in one spirit. They--}}
{{--                            were the men l'ho were alone and mailing for their moment of re-vindication. The spirit--}}
{{--                            of the land was present as I had never beJieved I would sce it . . . [T]1ie spirit of--}}
{{--                            the land stood proud and vibrant over the plaza of our liberties, filled with the--}}
{{--                            confirrnation of the spirit’s existence. (FrigoJen Perón, 27—2fl)</p>--}}
{{--                        <p>He later concludes Chat “tliose multitudes who saved Perón from captivity and who in one--}}
{{--                            day ¡iar‹i1yzed tlio country in his name, were the same multitudes wlio had congregated--}}
{{--                            in grief at the burial of Hipólito Yrigoyen. They were--}}
{{--                            the same multitudes armed with a powerful instiiict of political and liistorical--}}
{{--                            orienlation who since 1810 had entrusteil tlieir noble ideals to the leader wlio guiiled--}}
{{--                            them” (¥rigoyen y Perón, 29—30).* Thus, Scnlabrini constructs his tribe, his covenant--}}
{{--                            people: the spirit of the land, the people who intttit its purposes, and the caudillo--}}
{{--                            who articulates those purposes and makes them renlity, Moreover, it is the covenant--}}
{{--                            people set apart from the eneinies of the spirit, the foreignizing liberals, the cepoy--}}
{{--                            bourgeoisie that has sold its birthriglit as H-ue Argentines and worships alien gods.--}}
{{--                        </p>--}}
{{--                        <h2>:núl Scnlobrini Ortiz aCid 111c Ti ibnl /maginaii'on</h2>--}}
{{--                        <p>At this juncture, it should be clear that the tribal paradigm outlined above, using the--}}
{{--                            Genesis story as a point of departure, does indeed delimit a series of “tribelemes”--}}
{{--                            applicable to much of Scalabrini's construction of Argentine identity, history, and--}}
{{--                            destiny. I would also point out that, although I chose the Genesis story for its--}}
{{--                            fafailiarity, the “tribalemes” found therein are not unliLe those found in founding--}}
{{--                            myths of most human collectives, however “primitiie” a particular collcctive might seem.--}}
{{--                            Moreover that same paradigm can serve to describe many manifestations of modern--}}
{{--                            nationalism, beginning wirh Johann Herder’s sense of the German Volksgeist and ending--}}
{{--                            with ...--}}
{{--                            well, unfortunately, it hasn’t ended at all. Tribnlisrri of the most virulent sort--}}
{{--                            underlies much of tire nationalism dismembering what used to be Yugoslavia and the--}}
{{--                            Soviet block, not to mention the ravages wrought by lJutus versus Tutsis in Rwanda. And--}}
{{--                            in Argentina, one can hear echoes of Scalabrini’s tribalism in the right-ying ravings of--}}
{{--                            recent commentators like the frustrated coup-maker, Colonel Aldo Rico.*° These f:icts--}}
{{--                            raise several interesting questions. How, for example, are we to uiailerstand the--}}
{{--                            success of Scalabrini’s doctrine? But even more important, what are we to raake of--}}
{{--                            Scalabrini as a representative maker of tribalemes, particularly in comparison to the--}}
{{--                            vision of nationalism popularized by Eric Hobsbawm, Denedict Anderson, and friends? I--}}
{{--                            conclude with some premature musings on tlaese issues.--}}
{{--                        </p>--}}
{{--                        <p>First, there can be little doubt concerning the fact that Scnlabrini’s spiritual--}}
{{--                            Argentina was a major ingredient of the Peronist mytla. Under Perón, the balcony of the--}}
{{--                            Casa Rosadn becoine Argentina’s most powerful lectern. Proin it, Perón’s descamisados--}}
{{--                            leariied that they were the tnie Argentines, heirs to a grantl destiny that had been--}}
{{--                            frustrated by upper-class traitors, liberals, sellers of the Fatherland (loc--}}
{{--                            yendepatrin), and cepoy agents of British impcrialists. Said differently, Perón--}}
{{--                            inculcated in the masses that they werc the true covenant people, the meu who were alone--}}
{{--                            and waiting, and that tlaeir time had come. No one can fully explain the popular success--}}
{{--                            of 1°eronism; pnrt of it inight be liistorical accident, and no iloubt inuch of it has--}}
{{--                            to do with Perón’s extroordinary chiirisina and political genius. But to tliis equation--}}
{{--                            I would add aiiother factor: that by using Scalabrini’s neo-tribalism us an emotional--}}
{{--                            base, Peronism gave the Argentine--}}
{{--                            masses what liberalism I ad denied them, namely a sense of plRcfl in history and--}}
{{--                            collective identity, complete with a supernatural origin and destiny, a rationale for--}}
{{--                            seeing the upper classes as anti-Argentine enemics, atid a justification for patriarchy.--}}
{{--                            In sum, Perón, using ScalabrÍiti’s thinking as a point of reference, established a sense--}}
{{--                            of tribe. lndeed, witliout Scalabririi’s tribal iinagination, Peronisin would have--}}
{{--                            lacked one of its chief ingredients.--}}
{{--                        </p>--}}
{{--                        <p>Scalabrini’s success, liowever, poses a larger question about neo-tribalism in general--}}
{{--                            and its importancc in naüonalist mythology. And tliis brings me to B. J. Hobsbawm and--}}
{{--                            Benedict Anderson, the two thiilkers who have in recent years most influenced our--}}
{{--                            understanding of iiationalism. Hobsbawin and Anderson are careful scholars who, while--}}
{{--                            idenüfying ideas essential to nationalist mytliologies (what I call tiibelemes), seem--}}
{{--                            particularly intent on showing that such ideas liave no empirical ground, thnt such--}}
{{--                            ideas are in fact “iinagined.” No serious student of nationalism would dispute tliis--}}
{{--                            point; to do so would eventually lead one to argue that God, or some construction--}}
{{--                            thereoí, created nations—which of course is absurd. Nor would I dispute the contention--}}
{{--                            that libernlisin has indeed created successful nations in which the tribalist yeariiings--}}
{{--                            of natioiialisin are held at bay.</p>--}}
{{--                        <p>Where HobsbàWlTl Rnd Anderson go yrong is in their insistence üiat nations (and by--}}
{{--                            extension tribalemes) me a recent plienomenon, that prior to the modern period nations--}}
{{--                            did not exist because the meclianisms for irnagining therri did not exist. Anderson, for--}}
{{--                            exemple, arques at some lengtli thnt print capitalism allowed nntions to emerge, that--}}
{{--                            withoüt the sense of broad-scale collectivity and parallel time, modern nations would--}}
{{--                            not havc appeared.°° What we find iv this argument is an extended confusion of vehicle--}}
{{--                            with substnnce, scale with essence. While it is most certainly true that print--}}
{{--                            capitalism showed for larger collectivities, it is not at all clear that print--}}
{{--                            capitalísm did much to change the--}}
{{--                            essential ingredients of collective spuit and yeoplehood. Print capitalism may--}}
{{--                            have allowed tribalism to occur on a broader scale, btit it did not change its basic--}}
{{--                            structure. In short, however easily debnnked tribal constructs may be in any objective--}}
{{--                            sense, they repeatedly occur in the history of htiman communities, be that collectivity--}}
{{--                            the desert tribe of enrly Israel or a modern nation like Argentina. I would further--}}
{{--                            suggest that tribalism (al tl that brand of nationalism that seeks a tribnl--}}
{{--                            identification) is the exact opposite and chief nemesis of the liberal state.--}}
{{--                            Just as Scalabrini’s notions of real versus traitorous Argentines exacerbated divisioiis--}}
{{--                            already apparent in the country, tribalisin will always threaten societies dedicated to--}}
{{--                            pluralism and consensus.</p>--}}
{{--                        <p>Such are the lessons of Scalabrini’s tribal imagination. Based on palpable evidence, his--}}
{{--                            tribnl construct for Argentina has no defense. Yet, when we compare hi8 construct to--}}
{{--                            tribalconstructs much older than Argentina, we find re---}}
{{--                            markable parallels. Moreover, however flimsy the evidence for his imaginin8s, his--}}
{{--                            tribalisin formed the mythological base for the most powerful nationalist--}}
{{--                            movement in Argentine history—and one that could agoin become a powerful political force--}}
{{--                            when and if the current experiments with neo-liberalism come to naught. I would suggest--}}
{{--                            that part of Scalabrini’s success lies in his ability to recast ancient human sentiments--}}
{{--                            in a modem framework. I w ould further argue that such tribal sentiments often--}}
{{--                            contribute to nationalist movements, a fact that might suggest a kind of collective--}}
{{--                            imagination by which human collectives identify themselves for reasons that may have--}}
{{--                            more to do with anthropology and psychology then economics and politics. In sum, we can--}}
{{--                            admire Scalabrini’s imaginative genius in forging a tribalist for such an unlikely area--}}
{{--                            as the liodge- podge of culture, history, and ethnicity known as Argentina; but we can--}}
{{--                            also speculate that, if he hadn't done it, someone else would have.--}}
{{--                        </p>--}}
{{--                        <h2>The University of Texas at Austin</h2>--}}
{{--                        <p>As is often pointed or+t, the term, “nation” is not particularly useful for- delimiting--}}
{{--                            any particular sort of community. Applied to countries as old as China and us new as--}}
{{--                            Zlnibnbwe, as large as the United States and as small as Kuwait—as well as to peoples as--}}
{{--                            scattered ss Diaspora lews and as stateless as Kurtls—the term seems to include so mony--}}
{{--                            different types of social groups as to be virtually useless in sny definiti›'e sense. As--}}
{{--                            early as I 8b2, Ftet cL philosopher and historian Ernest Renan in 9u’est-ce gu’une nut--}}
{{--                            ion argued convincingly that Romantic motions of nationhood based on supposed racial or--}}
{{--                            cultural homogeneity had no factual basis. father, he saw them as human constructions,--}}
{{--                            the result of a”daily pléhiscite” (Oeuvres Coiiipléles Peris, lS4'7—6l, vol. I, pp.--}}
{{--                            887—907). Monern historians like fi. J. £Iobsbawm and Benedict Anderson insist that--}}
{{--                            nations as we know them did not exist until the beginning of the modern period, i.e.,--}}
{{--                            the mid-eigliteenth century. They suppon iliis po.sition by arguing that the erosion of--}}
{{--                            ecclesiastical po wer, the decline of the nobility, mid the rise of ihe bourgeoisie--}}
{{--                            demanded a key sort of collective i‹leiitity that became the modcrn nation. Anderson--}}
{{--                            also argues that the rise of print capitalism allowed ever ldrger communities to become--}}
{{--                            linguistically atid ideOlOg'ically cohesive, to imagine themselves on a larger scale and--}}
{{--                            in parallel time, thereby becoiiiing “nations.” (See B. I. Hobshawm, Nalionc erms--}}
{{--                            Natioiialicni cince 1'780.’ Pi’ogi-unime, M yili, Reality. 2nd ed. [Cambridge U.K.:--}}
{{--                            Cambridge University Press, 1S92j, pp. 8m5; and llenedict Anderson, Imagined--}}
{{--                            Coiiiinuniiies.- Reflections on llie Origin and Spi’ead of Nationalism. Revised edition.--}}
{{--                            [London: Verso, l991J, pp. 5-7.) These arguments do indeed offer considerable insight--}}
{{--                            into how 1-Iobsbawm and Anderson use the term, but ultimately their argument is--}}
{{--                            tautofogicat—i.e., nations are what they call nationswna to some degree sidesteps the--}}
{{--                            fact that the term was in use long before the 1700s, and is still applied to human--}}
{{--                            collectives that do not meet Anderson and Hobsbawm’s stringent requirements. While--}}
{{--                            appreciating their attempts to define the word, or ct least tell us how they use it, in--}}
{{--                            this Article I define “tri1›nlism” in fairly specific ways, but avoid using the term--}}
{{--                            “nation” in any particular fashion. Further, while I argue that trihalism (us I define--}}
{{--                            it here) often contributes to nationalist movements, 1 recognize that the term--}}
{{--                            “nationalism” is not necessarily limited to the tribal paradigm used here</p>--}}
{{--                        <p>Without question the most complete study of Scalabrini’.s life and works is Norberto--}}
{{--                            Gatesso's highly sympathetic biography, 0‹fa de Scyln5rini Orfi¿ (Buenos Aires: Hdi---}}
{{--                            ciones del Mar Dulce, 1970). A]so useful is Galasso’s less detailed biogrnphy Scalabrini--}}
{{--                            Or-fig (Buenos lres; Cuadernos de Crisis, 1975).</p>--}}
{{--                        <p>Both bouks consider the effect of British lodns, ownership, ancl general ilif{ue»ce on--}}
{{--                            Argentine economic developincntwn effeci that in Scalabrini’s view impoverished--}}
{{--                            Argentina aii‹I left it iii 8 DUU Of neo-colonial dependejlce. Çca}abrini't; ecopomic--}}
{{--                            g9p9$ are well described and analyze‹l in Mark Falcoff, “Raú1 8caIabrin i Ortiz: The--}}
{{--                            Making of an Argentine Nationalist,” Hi.sj ayic fÏmerican Hictoi’icyl Review 52, no. 1--}}
{{--                            (February 1972), 74—101. bec also Mark Falcoff, “Argentine Nationalisin on the Eve of--}}
{{--                            Perón: Porce or Radjcnl Oricntatioii of Young Argentina and Its RivtHs,” Ph.D. diss.--}}
{{--                            Princeton,--}}
{{--                            H. J.' Princeton University, 1970.</p>--}}
{{--                        <p>Auother reason for 8caIabrini's importante was hit infltience ori Argentina’s inost--}}
{{--                            iiiiportaiH political figure of this century, JualiDomingo Perón, the teacher of masecs,--}}
{{--                            un Doiv Jtinn Foro mccxci.” (The phrase ’eri Dpn Juan ¡mra iiiacúoi” ctHnes froJn Suban--}}
{{--                            novelist Anejo Carpentier's descriytioii of Guadelou p e's niiieteenth-century dictador--}}
{{--                            Victor Hugues, and in my view apily describen Perón's ability tO chürn men who sltould--}}
{{--                            have known bettei: (See Alejo Carpentier, El ciglo de tus luces, 1962; Barcelona: Seix--}}
{{--                            Barral, 1992, p. lO7.) Perón invenied little and borrowed much. lrideed, a chief element--}}
{{--                            of lris political genitis was hig abiliiy to bring diversa, often contraüictory,--}}
{{--                            £crCe0 and ideas info the saine political movemeiit. Isis understanding of Argentina--}}
{{--                            !'**'°' , patticularly its economic hisrory, was mvcii iiifiiieiicetl by the Cuadrryo ye--}}
{{--                            FORJA, wliose cliief author was ficalabrini Ortie (lee Galasso, día de Scalabrini, pp.--}}
{{--                            373—378). Siinilarly, the historicaJ analysis in Peróii'8 most iHfluential book, los--}}
{{--                            vrn‹fepniii«,-p -celia.r de ifnc traición, first publislied in Venezuela in 1957 can be--}}
{{--                            u'aced directly to Scalabrini—a dcbt Pelón actua@y acknowledges at sevmeraI orirás in--}}
{{--                            the text (Los vendefiati’ia, passim). Yet, 8ca1abrir*i had little contact with Perón and--}}
{{--                            J£•sented--}}
{{--                            not receiving more attention, or for tIiat in;itter a government post, during Perón's--}}
{{--                            first two presidències (1946-1955 ) (see Norbcrto Galasso, $ca/uúriiii Orti pp. 64—65).--}}
{{--                            Nonetlieless, wljen Perón fell in 1955, Scatabrini returned to the political fray,--}}
{{--                            aigoiiig until his deatl in 1959 that l•eronisin was the only alternative to colonial--}}
{{--                            domination.</p>--}}
{{--                        <p>Altn* 8 ' ! !"'* 8*" que "ctñ solo ›' e.srera may be Scalabrini's most popular wo k, and--}}
{{--                            one lie repeate If y refers to in his later years, it is a book giv en short shrift by--}}
{{--                            his biographers. Mark Palcoff, a usually perceptive analyst of Argentine affairs, makes--}}
{{--                            the remarkable claim that the book is rich in lyn/ordo, Buenos Aires's lower-class--}}
{{--                            dielect, and basically dismisses it as “disjointed and prolix” olbeit, “amusing.” I--}}
{{--                            suppose that “amusing” is a matter of tnsfe; it is less clear how anyone could confuse--}}
{{--                            Scalabrini’s elegant, often baroque, prose with luifnrdo (see Mark Falcoff, “Raiil--}}
{{--                            Scalabrini Ortiz: The Making of an Argentine Nationalist,” p. 89). NorbeiJo Galasso sees--}}
{{--                            the book primarily as a poetic endeavor that laid the ideological ground for--}}
{{--                            Scalabrini’s his- torical revisiouism anal anti-imperialist militancy, but what lie says--}}
{{--                            on the book is more descriptive than analytical (see like de Scolobriiii, p}›. 122-133),--}}
{{--                        </p>--}}
{{--                        <p>The extent to which the tribalist paradigm outlined below can be applied to thin*›•B--}}
{{--                            beyond Scalabi ini’s lies beyond the scope of this Article. I do not, for example, trace--}}
{{--                            elements of Scalabrini's thought to the pro to-nation.tlisin of thinkers like Johann--}}
{{--                            Herder ot Charles Maurres, although such connections could be made. In a longer strJdy--}}
{{--                            soon to be completed, however, I examine other naHona1ist movements in Spanish America--}}
{{--                            as they .show a nostalgia for g-ibaI identity similar to Scalabrini's. Several good--}}
{{--                            studics are available on Argentine nationalism. Among the best are Maiysa Gerassi--}}
{{--                            Navarro, Los nocionalistas (Buenos Aires: Editorial Joy-ge Alvalez, 1968) and David--}}
{{--                            Rock’s Auiltorirr rieit ñigeziti« (Berkeley: University of California Press, 1993).</p>--}}
{{--                        <p>Name changes in the Bible often indicate new relationships. Sarai bccoiiies Sai-ali to--}}
{{--                            symbolise that she ceases lier ordinary existence and is called to “give rise to--}}
{{--                            nations; kings of peoples shaft come from her” (Generis 17: lS—1C). lu the Christian--}}
{{--                            testament, Sirnon becoines Peter, a name ihat marks fiis ti'ansition from mere disciple--}}
{{--                            io “the rock” on which Christ will 1›uild mis church (16: l 7—18). Siinilarly, after--}}
{{--                            fiis conversion, S au1, the persecutor of Cñristiüns, becomes Paul, the Christian--}}
{{--                            evangelist and npostle to the Get tiles.</p>--}}
{{--                        <p>In a forthcoming book, also bearing in its title the term frit at iiiingiiiaiioii, I--}}
{{--                            inclucle information on how the trib‹ilemes identified iii this section occur in other--}}
{{--                            cultures. While the Genesis story provitle.s a useful frame for this article, tribalemes--}}
{{--                            of this sort can be found throughout human cultures and certainly not just in Genesis.--}}
{{--                        </p>--}}
{{--                        <p>Other important meditatious on Argentine's.apparent failtue inclurte works by na---}}
{{--                            tionaliste Juliö n0‹1 Rodolfo Irazustn (W orge i/iiio j e/ ii y7eriofisnio biritäiiico--}}
{{--                            of 1934), benjamin Villafafie (Lu traged''• • 8eniinu or 1934), and José Luis Torres--}}
{{--                            (Alguoas--}}
{{--                            »aneini fe vender fo patrie of 1940). A particularly pcs.sinistre work is Ezequiel--}}
{{--                            Martfnez Estrada's P•oJiogyalin Ile ly]yymya (1933) in which lie argues that--}}
{{--                            AJ-gentina’s failui'e was organic anjt thereby iiiescapable, the result of öefects iii--}}
{{--                            Creole cliaracter, Argentine gcograpliy, nnd Hispaiiic iraüiiion. In //i'sioria ne una--}}
{{--                            enrima (1937), Eduardo Mallen laments that national purpose has given woy to--}}
{{--                            materialism; he f ntlier outlines an uiifocussed ‹Iefer*se of Criollismo, not entirely--}}
{{--                            unlike Scalabrini's in LV fiorr6ic yue estâ 5'alo, although the two ineii were far from--}}
{{--                            political allies. Also important is Carlos Ibargurcii whose syinpathetic biography of--}}
{{--                            nineteeutli-century strongman, Juan Manuel de Roses, published in 1930, ii4augurate‹l a--}}
{{--                            school of historical revisionisin of which Scalafirini would fonn pan. I-or a brief--}}
{{--                            overview of intellectual cements of the lime, sec Mail Palcoff, “Intellectual Cui rents”--}}
{{--                            in Prologue to Perdit (l3erkeley: University of California Press, 1975), pp. 110—135. A--}}
{{--                            useful, though highly tendeiitious intellectual history of Scalabrini’s times is Juan--}}
{{--                            losé I3ernfindez Arregui’s m/ormriciñn de la concienci« bacteria/ fir,st published in--}}
{{--                            1960 and available in several editions. See also Joseph R. Barger’s study on Argentine--}}
{{--                            historiography, “Tlte Historiography of the Rfo ‹ie la Plata Area Since 1830.” The--}}
{{--                            Hisfyanic Amer icaii Ilistoi ical Review 39 (November 1959): 38fl—642.</p>--}}
{{--                        <p>RaGI Sca1a1›rini Ortiz, El hoitibre gue estâ solo y ecj:ier i (193 I: Dilenos Aires: Plus--}}
{{--                            Ultra, 1976), 19. Future references to this book are included in the text</p>--}}
{{--                        <p>The connection between scripture end El hombre que ectâ solo was not lost on its first--}}
{{--                            critics, some of whom ca1le‹l it the Biblia gorteiia. See Galasso, Villa de $tylabriiii,--}}
{{--                            pp, 122—128. tt is olso noteworthy that Scalabrini subtitled his book, Sierra be nodie,--}}
{{--                            iierra de yrofetas os a devotionary for Argentiiies. Although too abstract for easy--}}
{{--                            descrjption, the poems in Der 'o de nadie frequently make reference to the mystical--}}
{{--                            Argentine lund and the neeil of individuals to submerge themselves in a collective--}}
{{--                            identity, in “inciting oneself into something larger than oneself” (16).</p>--}}
{{--                        <p>Karen Armstrong, A history m4: rt‹ ‹ore-rear Quest of Judaism, Cliriytianiry--}}
{{--                            arid /sfeni (New York: Alfred A. IRopf, 1994), pp. ?—27.--}}
{{--                            I" The need for th individuel to suppress his ego to bong with the collectivité is also--}}
{{--                            a frequeut tlieiiie in Scfllabrini's book of poetry, Tieiya Jin nadci, J"ieri-a de p--}}
{{--                            deuocionario para el Nombre •^8 eniino. 2nd ed. (Buenos Aires: Plus Ultra, 1973),</p>--}}
{{--                        <p>Yrigoyen became president of Argentina in 1916 after some twenty-live years of struggle--}}
{{--                            against what lie called “the regime,” his name for the oligarchic, ostensibly liberal--}}
{{--                            governments that had ruled Argentina since Baiaoloiné Mitre hecnme president in 18G2,--}}
{{--                            one of Yrigoyen's iiiajor achievements was seeing the passage of the Sñenz Peñe Law--}}
{{--                            which in 1912 brought universal suffrage to Argentine (men only) and thus pavetl the way--}}
{{--                            for Yrigoyen's presidential triumph four years later. Despite vicioue opposition from--}}
{{--                            Argentine traditionalists, Yrigoyen served a full term. Forbidden by the constitution to--}}
{{--                            seek reelection, he yielded power to Mercelo T. de Alvear in 1922, but returned again to--}}
{{--                            the presidency in 1928. On September 6, 1930, he was ousted from power by a fascist-led--}}
{{--                            military coup, the first in this century. Carlos Menem recently became the first Arb--}}
{{--                            entiiie president since 1928 to complete a full six-year term.</p>--}}
{{--                        <p>In November of 1939, Scalabrini fountled a daily newspaper titled Reconquista or--}}
{{--                            “recoiiquest.” The name is a powerful allusion to the wars fought by Spanish Christians--}}
{{--                            during the late Middle Ages to liberate Christian Spain (which the reconquistadorec--}}
{{--                            thought iiicludeil the entire Iberian Peninsula) from Moorish (i.e„ foreign) doininetiol--}}
{{--                            . Since the Spanish reconquista was essentially a holy war against a foreign occupation,--}}
{{--                            the connection betyeen the Spanish reconguisin end 8calnbiini’s struggle to reclaim--}}
{{--                            Argentina for true Argentines was surely not lost on him. The name thus makes a stung--}}
{{--                            emotional connection between the struggles of two covenilnt peoples to reclaim their--}}
{{--                            promised lantl firm foreign occupation. Oddly, f'a1coff claims iliat the newspaper's--}}
{{--                            name alliides to Bueiios Aires's victoiy over a Brftfsh illY88ion force in 1806. W liile--}}
{{--                            the creole inilitia that defeeted the British may linve seen theinselves as pam of a i--}}
{{--                            econquista, the true mytt ological resonance of the term goes back to the struggle of--}}
{{--                            Spaiiish Christians egainst the Moors.</p>--}}
{{--                        <p>Scalabiini's tascinatiori yith strong leader s end his disillusionmeiit with bourgeois--}}
{{--                            democracy led to freqBent accuse tions of fascism. Scalebrini himselÎ claimed that he--}}
{{--                            was ri “Leniiiist” and a matgrialist (Rock, Authorilai’icni digeitfio«, 123), altliough--}}
{{--                            it is not clear what precisioi4 or scope lie might have given thèse terme. His--}}
{{--                            connection with fascism and pro-Axis syinpatliizers is a irluch debaietl topic. While--}}
{{--                            there is little évidence tt„t 5t oct¡„ty st,ppuried ihe Axis war effort, he dit--}}
{{--                            collaborate with Axis supporters in then- cainpaign agein8t Briti8h interests in--}}
{{--                            Argentine (see Davi‹l Rock, Auilioritai’inii Argentiiia, gg. 23—24 and 198, and Mark--}}
{{--                            Falcoff, “Raü1 SCalabrini OrtiZ . . . " pp. 95— 97). His most sympatlietic biographer,--}}
{{--                            Norherto Galasso, claires that altliough tempted by an of£er of money from the Germau--}}
{{--                            embassy to help subsiélize Scalabrini's short- liyeft peiiodical, Iteconguisto,--}}
{{--                            Scalabrini refused the ofiei and time accepted bankruptcy</p>--}}
{{--                        <p>The anti-immigrant sentiment is cosy to document. In leer ground-breaking Study of--}}
{{--                            Spanish American autobiography, Sylvia Molloy shows how ivtigueI Cané's seemingly--}}
{{--                            innocent rrlemoirs, Jai rnific of 1882, is in fact an exercise in “class bon‹ling” to--}}
{{--                            shore up defenses against the iiiimigrfit intruders. See also German Garcfa’s if--}}
{{--                            inrnigrciife en Hi novela a 8enlina (Buenos Aires: Idachettp, 1970).</p>--}}
{{--                        <p>Scalabrini retells the same incident using virtually the same words ili the foreword to--}}
{{--                            his book of poetry and poet -like meditations, Tierra tin nadie, fieri a de pro[etas, p.--}}
{{--                            35.</p>--}}
{{--                        <p>Aldo Rico, Conye rsacioiiec con cl teniente Al'1o ico (B enos Aires: E"litorial--}}
{{--                            Portalesa, 1989).--}}
{{--                            See p‹lrticu1srly An‹lerson, Chapters Two ring Three, pp. 9—46. In fairness to Anderson,--}}
{{--                            I should note that he certainly allows for the mythical, tribalist aspect of nationalism--}}
{{--                            1 support here. Lideed, his title finoginerf Communities elm ‹les precisely to this--}}
{{--                            issue. What is peculiar iii his book, however, is a repeate‹l tendency to debunk--}}
{{--                            imagined constructions Ir erely because they are imagined ontl to seek firmer ground in--}}
{{--                            material explanations. It aLiiost seenJs thai at times he seeks to rtistance himself--}}
{{--                            from one of the most interesting insights of his book. Hobsbawin, in contrast, not only--}}
{{--                            consi‹Iers nations, artificial constructions hn t joins a long tist of thinkers, Karl--}}
{{--                            Marx and Adam Smith among them, who argue that nations will eventually become obsolete--}}
{{--                            and disappear altogether.--}}
{{--                        </p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
