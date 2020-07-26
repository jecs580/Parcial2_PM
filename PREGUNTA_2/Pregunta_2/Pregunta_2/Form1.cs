using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Pregunta_2
{
    public partial class Form1 : Form
    {
        Bitmap bmp;
        Color c1;
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Carga una imagen y la muestra desde un PictureBox
            openFileDialog1.Filter = "Archivos JPG |*.jpg|Archivos BMP|*.bmp|Todos los archivos|*.*";
            openFileDialog1.ShowDialog();
            bmp = new Bitmap(openFileDialog1.FileName);
            pictureBox1.Image = bmp;
        }

        private void contorno_Click(object sender, EventArgs e)
        {
            // Aplicacion filtro Laplaciano de 3x3 para obtener el contorno
            // [[0,1,0]
            // [1,-4,1]
            // [0,1,0]]
            Bitmap bmp1 = new Bitmap(bmp.Width,bmp.Height);
            int width = bmp.Width - 1, height = bmp.Height - 1;
            for (int i = 1; i < width; i++)
            {
                for (int j = 1; j < height; j++)
                {
                    Color a, b, c, d,e1;
                    a = bmp.GetPixel(i, j - 1);
                    b = bmp.GetPixel(i - 1, j);
                    c = bmp.GetPixel(i, j);
                    d = bmp.GetPixel(i + 1, j);
                    e1 = bmp.GetPixel(i, j + 1);
                    int red = a.R + b.R + c.R * (-4) + d.R + e1.R;
                    int green = a.G + b.G + c.G * (-4) + d.G + e1.G;
                    int blue = a.B + b.B + c.B * (-4) + d.B + e1.B;
                    int media = (red + green + blue) / 3;
                    if (media > 255) media = 255;
                    if (media < 0) media = 0;
                    bmp1.SetPixel(i,j,Color.FromArgb(media,media,media));
                }                              
            }
            pictureBox1.Image = bmp1;                 
        }                                  
      }
}
