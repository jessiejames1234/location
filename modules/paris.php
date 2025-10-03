<style>
  div[style*="flex: 1 1 300px"] {
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.07);
    border-radius: 10px; /* slightly rounder */
    background: linear-gradient(145deg, #ffffff, #f9f9f9);
    padding: 20px !important; /* keep original padding */
    max-width: 300px !important;
    flex: 1 1 300px !important;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #444;
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
  Paris
</h1>

<p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #555; max-width: 800px; margin: 0 auto 40px auto; line-height: 1.6; text-align: center;">
  Paris is the capital city of France, celebrated worldwide for its art, fashion, gastronomy, and culture. The metropolitan area houses over 12 million inhabitants, blending historic charm with modern vibrancy.
</p>

<div style="display: flex; flex-wrap: wrap; justify-content: center; background-color: #f5f5f5; padding: 40px 0; gap: 20px;">

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Eiffel Tower</h3>
    <p>The iconic symbol of Paris and France, the Eiffel Tower offers breathtaking views of the city from its observation decks.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Louvre Museum</h3>
    <p>The world’s largest art museum, home to thousands of works including the Mona Lisa and the Venus de Milo.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Notre-Dame Cathedral</h3>
    <p>A masterpiece of French Gothic architecture, the Notre-Dame is famed for its stunning stained glass and historic significance.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Montmartre</h3>
    <p>A charming neighborhood known for its artistic history, winding streets, and the Sacré-Cœur Basilica perched on a hill.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Champs-Élysées</h3>
    <p>One of the world’s most famous avenues, lined with theaters, cafés, luxury shops, and leading to the Arc de Triomphe.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Seine River</h3>
    <p>Flowing through the heart of Paris, the Seine offers romantic boat cruises and stunning views of many of the city's landmarks.</p>
  </div>

</div>
