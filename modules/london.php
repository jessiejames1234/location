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
  London
</h1>

<p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #555; max-width: 800px; margin: 0 auto 40px auto; line-height: 1.6; text-align: center;">
  London is the capital city of the United Kingdom, a bustling metropolis rich in history, culture, and iconic landmarks. The metropolitan area is home to over 9 million people.
</p>

<div style="display: flex; flex-wrap: wrap; justify-content: center; background-color: #f5f5f5; padding: 40px 0; gap: 20px;">

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Big Ben</h3>
    <p>The iconic clock tower and symbol of London, officially known as the Elizabeth Tower, standing beside the Houses of Parliament.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Tower of London</h3>
    <p>A historic castle on the north bank of the River Thames, famous for housing the Crown Jewels and its medieval architecture.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Buckingham Palace</h3>
    <p>The official residence of the British monarch in London, known for the Changing of the Guard ceremony.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">The British Museum</h3>
    <p>One of the world’s greatest museums, housing a vast collection of art and artifacts from ancient and contemporary cultures.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">London Eye</h3>
    <p>A giant Ferris wheel on the South Bank of the Thames, offering panoramic views of London’s skyline.</p>
  </div>

  <div style="flex: 1 1 300px; max-width: 300px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #444;">
    <h3 style="margin-top: 0;">Covent Garden</h3>
    <p>A vibrant area known for its market, street performances, shops, and restaurants, popular among locals and tourists alike.</p>
  </div>

</div>
