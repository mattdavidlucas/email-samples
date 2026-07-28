# Teradata & Ozone Online Client Work Samples

From September 2013 to April 2016 I was a developer at Ozone Online, a San Francisco digital marketing agency later acquired by Teradata, building marketing emails and landing pages for enterprise clients.

Agency work meant constant context-switching: one week a lead nurture campaign for Intel in Eloqua, the next a Marketo landing page for Autodesk. That's good for range, and it gave me a firm foundation in marketing automation and the mechanics of large-scale campaign execution. It's also where I first noticed the actual problem. The clients with the biggest programs were not asking for one email. They were asking for the same email forty times with different copy in it, and every one of those forty was a chance for someone to break the footer, misname the asset, or lose a brand color. Building them by hand did not scale, and more importantly, it made me the bottleneck for work that did not need a developer at all.

So the two things in this directory I'd actually point at are the build tools, not the emails.

## The Autodesk email builder

![](/assets/teradata-image-02.png "")

`autodesk/email-builder/`

Autodesk had a real design system and a legal review process, and both were being re-implemented by hand in every email. I turned the design system into code.

**`includes/config.inc.php`** holds the brand palette as four variables. Every template pulls its colors from there instead of hard-coding hex values, so a brand refresh is a four-line change rather than a find-and-replace across every file anyone has ever built.

**`includes/components.php`** is the component library. `primaryCTA()` and `secondaryCTA()` are PHP functions that emit the full, Outlook-tested markup for a button given a width, a color, and a label. Before this, a button was thirty lines of nested tables that someone copied from a previous email and edited by hand, which is how buttons quietly drift out of spec. After this, a button is one function call.

![](/assets/teradata-image-03.png "")

**`includes/footer.inc.php`** this is the Autodesk legal footer, with the optional disclosure clauses left in place and flagged in red with the conditions under which they apply and a link to Autodesk's legal Marketing Toolkit. That's not a coding decision; it came out of working with Autodesk's legal and brand partners to get the rules written down somewhere the person building the email would actually see them. Legal changes the language once in that file and every email built afterward inherits it.

**`adsk-master-template.php`** and **`templates/`** compose those pieces into finished assets. The master template is the reference build showing every available module; the files in `templates/` are the specific email types (promo, event) assembled from the same components. Each one ends with `file_put_contents()`, which means opening the PHP file in a browser writes the finished HTML into `output/`. Building an email became running a file, not editing one.

**`sass/styles.scss`** compiles to the stylesheet that gets injected into the head of every template at build time. Same idea one layer down: spacing and breakpoints defined once.

**`Gruntfile.js`** runs [grunt-prettify](https://www.npmjs.com/package/grunt-prettify) over the generated HTML and drops the cleaned files into `output/marketo/`, ready to paste into the platform.

The `mktEditable` divs wrapping each module are what made this work end-to-end: they mark regions Marketo lets a marketer edit in the platform's own UI. The generated template goes into Marketo once, and the campaign team edits copy inside it without a developer touching anything.

## The Intel Internet of Things (IoT) asset builders

![](/assets/teradata-image-01.png "")

`intel/tools/iot-asset-builders/`

Intel's IoT nurture program ran through Eloqua and had a strict naming convention for every asset: vanity URLs like `US.EN.Embedded.registration-form-awareness-3-...` and asset names like `Embedded.US.EN.IOT eNuture.683 - Awareness 3 - LP`. Getting one character wrong meant an asset that campaign ops could not find and reporting could not roll up. People got it wrong constantly, and I don't blame them.

So I built a browser tool. **`email/index.php`** and **`landing-pages/index.php`** are forms: pick the funnel stage and number from dropdowns, type in the subject line, preheader, headline, body copy, and CTA. **`js/global.js`** assembles the correct URLs and asset names from those selections and mirrors shared fields between the landing page form and the thank-you page form so they cannot disagree. The form posts to **`output/intel-IoT-email-template.php`**, which reads the values and prints the finished, Eloqua-ready HTML.

The naming convention stopped being a document people were supposed to remember and became a dropdown they could not get wrong. Non-developers on the campaign team could produce a compliant email, landing page, and thank-you page without me.

**`tools/icons.html`** is the supporting piece: a rendered reference sheet of every approved icon in the program, so nobody had to go digging for a URL.

## The rest

| Directory | What it is |
| --- | --- |
| `autodesk/*.html` | Finished Marketo emails for AutoCAD 360, AutoCAD 360 Pro, and Autodesk mechanical engineering, plus the master template as deployed |
| `intel/intel-email.html`, `intel-lp.html`, `intel-ty.html` | The Eloqua email, registration landing page, and thank-you page for one nurture asset, shown as a complete set |
| `hertz-poc/` | A concept email built to pitch Hertz, with the rendered PNG alongside it |
| `teradata-dmp-demo/` | Two fictional brands (Titan Energy and Runners) built as demo properties for Teradata's DMP: responsive marketing sites, Sass source, forms with a PHP processor, landing pages, and a matched set of promo, thank-you, and social-share emails. These were the sandbox the sales team used to show cross-channel personalization working end to end. |

![](/assets/teradata-image-04.png "")