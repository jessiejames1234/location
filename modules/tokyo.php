<style>
  div[style*="flex: 1 1 300px"] {
    /* Keep your original size & layout */
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.07);
    border-radius: 10px; /* Slightly rounder */
    background: linear-gradient(145deg, #ffffff, #f9f9f9);
  }

  div[style*="flex: 1 1 300px"]:hover {
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.15);
    transform: translateY(-6px);
  }

  h3[style*="margin-top: 0"] {
    position: relative;
    color: #222;
    font-weight: 700;
    font-size: 1.3rem;
    margin-bottom: 12px;
  }

  /* subtle underline on heading */
  h3[style*="margin-top: 0"]::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 50px;
    height: 3px;
    background-color: #ff5e57;
    border-radius: 2px;
    transition: width 0.3s ease;
  }

  div[style*="flex: 1 1 300px"]:hover h3::after {
    width: 100%;
  }

  p[style*="font-family"] {
    color: #555;
    line-height: 1.6;
    font-size: 1rem;
  }
</style>

<h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333; text-align: center; margin-bottom: 20px;">
  Tokyo
</h1>

<p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #555; max-width: 800px; margin: 0 auto 40px auto; line-height: 1.6; text-align: center;">
  Tokyo is the capital city of Japan. It is a vibrant metropolis known for its mix of traditional culture and modern innovation, with a metropolitan area home to over 37 million people.
</p>

<div style="display: flex; flex-wrap: wrap; justify-content: center; background-color: #f5f5f5; padding: 40px 0; gap: 20px;">

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Shibuya Crossing</h3>
    <p>One of the busiest pedestrian crossings in the world, Shibuya Crossing is a symbol of Tokyo’s fast-paced life and modern culture.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Asakusa</h3>
    <p>Home to the historic Senso-ji Temple, Asakusa offers a glimpse into traditional Tokyo with its temples, markets, and rickshaws.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Akihabara</h3>
    <p>Known as the mecca for electronics, anime, and gaming culture, Akihabara is a haven for tech lovers and otaku fans alike.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Tokyo Tower</h3>
    <p>A red-and-white landmark inspired by the Eiffel Tower, Tokyo Tower offers panoramic views and cultural exhibits.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Shinjuku Gyoen</h3>
    <p>One of Tokyo’s largest and most beautiful parks, combining Japanese, English, and French garden styles in a peaceful urban oasis.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Odaiba</h3>
    <p>A futuristic entertainment hub built on a man-made island, Odaiba features shopping malls, theme parks, and waterfront views.</p>
  </div>

</div>
