# UserTesting Marketo Engage Templates

![UserTesting Image](/assets/ut-homepage-thumbnail.jpeg)

A Marketo Engage email template system I built at UserTesting, covering external marketing, partner and customer newsletters, internal employee communications, and the email preference center. The templates share a module library and a brand system, so a marketer composes an email in Marketo's drag-and-drop editor without touching code and without being able to break the brand.

## How the system is put together

**`usertesting-marketo-snippets.html`** is the shared foundation. It defines the module vocabulary the rest of the templates draw from: heroes, headlines, subheads, paragraphs, labels, lists (simple, numbered, and image), articles, signatures, CTAs, spacers, and the header and footer snippets. It's the single place the vocabulary is defined, which is why the other templates stay consistent with each other rather than drifting.

**`usertesting-marketo-newsletter-template-2021.html`** is the clearest example of the module system in use. It carries roughly 45 editable regions built from small, medium, and content-width feature blocks, a blue section banner with an icon dropdown of seven approved icons, and rounded-corner controls with separate desktop and mobile values. A marketer assembles a newsletter out of those blocks in whatever order the content needs.

**`usertesting-marketo-marketing-email-template.html`** and **`usertesting-marketo-marketing-email-multiple-content-areas.html`** are the general-purpose campaign templates, the second one built for sends with several independent content sections.

**`usertesting-marketo-email-preference-center.html`** is the piece that isn't an email. It's the hosted page where subscribers choose what they want to hear about, built as a Marketo landing page template with its own editable regions (primary color, button color, whether to show the header, social, footer) and wired to Osano for consent management, GTM, and custom cookie logic. Preference centers are usually an afterthought that gets built once and never touched. Making it a template meant the team could adjust it without a ticket, and making it good meant fewer people choosing "unsubscribe from everything" as the only comprehensible option.

## What using it looked like

1. A marketer picks the template that matches the send (newsletter, campaign, internal, plain text).
2. They add, remove, and reorder modules in Marketo's editor.
3. They write copy directly into the editable regions and upload their own images.
4. They adjust spacing with the sliders and pick colors and icons from the dropdowns.
5. They send.
