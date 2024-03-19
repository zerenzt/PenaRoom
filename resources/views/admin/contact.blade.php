@@include('header.htm')
@@include('blocks/page-header.htm',{"title": "Contact Us", "page": "Contact Us"})

<section class="section-sm">
  <div class="container">
    <div class="columns">
      <div class="column is-8-widescreen mx-auto">
        
        <div class="content mb-5">
          <h2 id="we-would-love-to-hear-from-you">We would Love To Hear From You&hellip;.</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit massa vitae felis augue. In venenatis scelerisque accumsan egestas mattis. Massa feugiat in sem pellentesque.</p>
        </div>
        
        <form method="POST" action="#">
          <div class="input-group">
            <label for="name">Your Name (Required)</label>
            <input type="text" name="name" id="name" class="input" placeholder="John Doe" required>
          </div>
          <div class="input-group">
            <label for="email">Your Email Address (Required)</label>
            <input type="email" name="email" id="email" class="input" placeholder="johndoe@gmail.com" required>
          </div>
          <div class="input-group">
            <label for="email">Reason For Contact</label>
            <input type="email" name="email" id="email" class="input" placeholder="Advertising">
          </div>
          <div class="input-group">
            <label for="message">Your Message Here</label>
            <textarea name="message" id="message" class="input" placeholder="Lorem ipsum dolor sit amet..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Now</button>
        </form>
      </div>
    </div>
  </div>
</section>

@include('footer.html')