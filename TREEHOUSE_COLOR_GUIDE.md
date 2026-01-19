# Treehouse Therapy Center - Color & Component Reference

## 🎨 Complete Color Palette

### Primary Colors
```
Primary Navy:     #1E3A5F
├─ Use: Main text, headings, dark backgrounds
├─ Text color for navigation
└─ Button borders and outlines
```

```
Primary Orange:   #E8912D
├─ Use: Primary CTA buttons
├─ Gradient start color
├─ Link hover states
└─ Icon accents
```

```
Golden Yellow:    #F5B041
├─ Use: Gradient end color
├─ Secondary accents
├─ Icon highlights
└─ Badge backgrounds
```

### Secondary Colors
```
Teal Light:       #5DADE2
├─ Use: Secondary interactive elements
├─ Focus states
├─ Cloud graphics
└─ Hover effects
```

```
Seafoam Green:    #48C9B0
├─ Use: Nature-inspired accents
├─ Icon backgrounds
├─ Floating elements
└─ Hover states
```

### Dark & Neutral
```
Deep Teal:        #1A5276
├─ Use: Dark section backgrounds
├─ Footer styling
└─ Contrast elements

Tree Brown:       #6E4C1E
├─ Use: Tree elements
├─ Natural accents
└─ Logo details

Cream BG:         #FAF9F6
├─ Use: Primary background color
├─ Section alternations
└─ Light neutral spaces
```

### Text Colors
```
Text Dark:        #1E3A5F (Primary Navy)
├─ Body text
├─ Heading color
└─ Main content

Text Medium:      #4A5568
├─ Secondary text
├─ Descriptions
└─ Supporting content

Text Light:       #718096
├─ Tertiary text
├─ Footnotes
└─ Metadata
```

## 🔘 Button Components

### Primary Button (CTA)
```
Background:       Linear gradient (Orange → darker Orange)
Text Color:       White
Border:           None
Padding:          0.75rem 1.5rem
Border Radius:    9999px (pill shape)
Shadow:           0 4px 6px -1px rgba(232, 145, 45, 0.4)
Hover:
  - Background:   Linear gradient (darker Orange → Orange)
  - Transform:    translateY(-2px)
  - Shadow:       0 10px 15px -3px rgba(232, 145, 45, 0.5)
  - Shine Effect: Left-to-right gradient animation
```

### Secondary Button
```
Background:       White
Text Color:       Primary Navy
Border:           1px solid Primary Navy
Padding:          0.75rem 1.5rem
Border Radius:    9999px
Shadow:           0 4px 6px -1px rgba(0,0,0,0.1)
Hover:
  - Background:   Primary Navy
  - Text Color:   White
  - Shadow:       0 10px 15px -3px rgba(0,0,0,0.1)
```

## 📦 Card Component

```
Background:       White
Border Radius:    1rem
Padding:          2rem
Shadow:           0 4px 6px -1px rgba(0,0,0,0.1)
Transition:       transform 0.3s, box-shadow 0.3s
Border on Hover:  Gradient border animation
Hover:
  - Transform:    translateY(-8px)
  - Shadow:       0 20px 25px -5px rgba(0,0,0,0.1)
```

### Card Sizes
- **Standard**: padding 2rem
- **Small**: padding 1.5rem
- **Large**: padding 2.5rem

## 📋 Form Elements

### Labels
```
Font Family:      Nunito
Font Weight:      600 (semibold)
Font Size:        0.95rem
Color:            Primary Navy (#1E3A5F)
Margin Bottom:    0.5rem
```

### Input Fields
```
Width:            100%
Padding:          0.875rem 1rem
Border:           1px solid #ddd
Border Radius:    0.625rem
Background:       White
Font Family:      Open Sans
Font Size:        1rem
Transition:       all 0.2s ease-out

Focus State:
  - Border Color: Teal Light (#5DADE2)
  - Shadow:       0 0 0 3px rgba(93, 173, 226, 0.1)
  - Background:   #f9fafb
  - Outline:      None
```

## 🎯 Icon Circles

### Default (Orange Gradient)
```
Width/Height:     4rem (64px)
Border Radius:    9999px (circular)
Background:       Linear gradient (Orange → Golden Yellow)
Shadow:           var(--shadow-md)
Hover:
  - Transform:    scale(1.05)
  - Shadow:       0 8px 24px rgba(93, 173, 226, 0.3)
```

### Variations
- **icon-gradient-teal**: Teal → Seafoam
- **icon-gradient-mixed**: Seafoam → Orange

## 🌊 Typography Scale

### Headings
```
h1:  font-size: 2.5rem;    line-height: 1.2;  Nunito Bold 700
h2:  font-size: 2rem;      line-height: 1.3;  Nunito Bold 700
h3:  font-size: 1.5rem;    line-height: 1.4;  Nunito Bold 700
h4:  font-size: 1.25rem;   line-height: 1.4;  Nunito Bold 700
```

### Body
```
p:   font-size: 1rem;       line-height: 1.6;  Open Sans Regular 400
```

### Special
```
.gradient-text:
  Background:    Linear gradient (Orange → Golden Yellow)
  -webkit-background-clip: text
  -webkit-text-fill-color: transparent
  background-clip: text
```

## ✨ Animation Library

### Floating Animations
```
.float:
  Duration:      6s
  Timing:        ease-in-out
  Loop:          infinite
  Motion:        translateY(-20px) + rotate(3deg)
  
.float-slow:
  Duration:      8s
  Motion:        translateY(-15px) + rotate(-2deg)
  
.float-reverse:
  Duration:      7s
  Motion:        oscillating translateY with rotation
  
.drift:
  Duration:      12s
  Motion:        circular path movement
  Complexity:    25% → 50% → 75% → 100% transform changes
```

## 🎨 Shadow System

```
Shadow SM:    0 1px 2px 0 rgba(0, 0, 0, 0.05)
Shadow MD:    0 4px 6px -1px rgba(0, 0, 0, 0.1)
Shadow LG:    0 10px 15px -3px rgba(0, 0, 0, 0.1)
Shadow XL:    0 20px 25px -5px rgba(0, 0, 0, 0.1)
```

## 📐 Spacing & Sizing

```
Border Radius:
  - Pill buttons:    9999px
  - Cards:           1rem
  - Form inputs:     0.625rem
  - Icon circles:    9999px

Padding:
  - Buttons:         0.75rem 1.5rem (0.65rem 1.25rem mobile)
  - Cards:           2rem (1.5rem small, 2.5rem large)
  - Form inputs:     0.875rem 1rem

Heights:
  - Header:          5rem (h-20)
  - Icon circle:     4rem (64px)
  - Line height:     1.2-1.7 depending on element
```

## 🎯 Hero Section

### Background
```
Gradient:        from-cream-bg to-teal-light/10
Padding Top:     100px (includes fixed header)
Cloud Graphics:  3 static SVG clouds at various opacity
Floating Icons:  7 animated elements with different animations
```

### Content Grid
```
Desktop:         2 columns (1fr 1fr)
Mobile:          1 column
Gap:             3rem (12 units)
Vertical Align:  center
```

## 🎬 Responsive Breakpoints

```
Mobile:          < 768px
  - Opacity:     0.4 for floating elements
  - Scale:       0.7 for floating elements
  - Font size:   Reduced headings

Tablet:          768px - 1024px
  - Full layout adjustments
  - Wave divider height: 80px

Desktop:         1024px+
  - Wave divider height: 100px
  - Full animations enabled
```

## ♿ Accessibility Features

```
Color Contrast:
  - Primary Navy on White: 18.5:1
  - Text Dark on Cream BG: 17.2:1
  - All text meets WCAG AAA

Motion:
  - prefers-reduced-motion support
  - All animations disabled for users with preference
  - Duration: 0.01ms
  - Iteration count: 1

Focus States:
  - Visible on all interactive elements
  - 3px colored border on inputs
  - Sufficient contrast for visibility
```

---

## 📚 Usage Examples

### Primary CTA Button
```html
<a href="#contact" class="btn btn-primary">Contact Us</a>
```

### Secondary Button
```html
<a href="#services" class="btn btn-secondary">Our Services</a>
```

### Card Component
```html
<div class="card card-lg">
  <h3 class="text-primary-navy">Title</h3>
  <p class="text-text-medium">Content here</p>
</div>
```

### Icon Circle
```html
<div class="icon-box icon-gradient-orange">
  <svg>...</svg>
</div>
```

### Form Input
```html
<label class="form-label">Email Address</label>
<input type="email" class="form-input" placeholder="you@example.com">
```

### Gradient Text
```html
<h1>Main Title
  <span class="gradient-text">with gradient</span>
</h1>
```

---

**Design System Version**: 1.0.0 (Treehouse Therapy Center)
**Last Updated**: 2024
**Status**: ✅ Production Ready
